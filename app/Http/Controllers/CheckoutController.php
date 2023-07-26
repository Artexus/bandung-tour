<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;




class CheckoutController extends Controller
{
    public function checkout(Request $req)
    {
        $carts = Cart::where('user_id', Auth::user()->id)->where('deleted_at', null)->get();
        $totalAmount = 0;
        foreach ($carts as $cart) {
            $totalAmount = $totalAmount + ($cart->tickets->price * $cart->quantity);
        }

        $transaction = Transaction::where('user_id', Auth::user()->id)->where('status', "ON_PROGRESS")->where('deleted_at', null)->first();
        if ($transaction) {
            $flag = false;
            foreach ($carts as $cart) {
                if ($cart->created_at >= $transaction) {
                    $flag = true;
                    break;
                }
            }

            if (!$flag) {
                $detail = json_decode($transaction->payload);
                return redirect($detail->checkout_url);
            } else {
                $transaction->update([
                    "status" => "FAILED",
                    "deleted_at" => Carbon::now(),
                ]);
            }
        }

        $externalID = str_replace('-', '', Str::uuid());
        try {
            $basicAuth = 'Basic ' . base64_encode(env('SECRET_XENDIT_KEY') . ':');
            $req = Http::withHeaders([
                "Authorization" => $basicAuth,
            ])->post("https://api.xendit.co/v2/invoices", [
                "external_id" => $externalID,
                "amount" => $totalAmount,
            ]);

            $resp = $req->object();
        } catch (Exception $e) {
            Log::error("apicall error: ", $e->getMessage());
        }

        if ($resp != null) {
            $contents = array();
            foreach ($carts as $cart) {
                $site = array(
                    "ticket_id" => $cart->tickets->id,
                    "ticket_name" => $cart->tickets->name,
                    "location_name" => $cart->tickets->sites->location_name,
                    "price" => $cart->tickets->price,
                    "quantity" => $cart->quantity,
                );

                array_push($contents, $site);
            }

            $detail = array(
                "checkout_url" => $resp->invoice_url,
                "total_amount" => $totalAmount,
                "user_id" => Auth::user()->id,
                "email" => Auth::user()->email,
                "contents" => $contents,
            );
            Transaction::create([
                "invoice_id" => $externalID,
                "user_id" => Auth::user()->id,
                "payload" => json_encode($detail),
                "status" => "ON_PROGRESS"
            ]);

            return redirect($resp->invoice_url);
        }
    }

    public function invoice(Request $req)
    {
        $status = "";
        switch ($req['status']) {
            case 'PAID':
                $status = 'COMPLETED';
                break;
            case 'EXPIRED':
                $status = 'FAILED';
                break;
            default:
                $status = 'ON_PROGRESS';
        }
        // Success Transaction
        $transaction = Transaction::where('invoice_id', $req->external_id)->first();
        $transaction->update([
            "status" => $status
        ]);

        if ($status == "COMPLETED") {
            // post purchase
            Cart::where('user_id', $transaction->user_id)->update([
                "deleted_at" => Carbon::now()
            ]);
        }


        return response()->json([]);
    }
}
