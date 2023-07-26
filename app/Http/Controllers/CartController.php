<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function addCart(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'ticket_id' => 'required',
                'quantity' => 'required|min:1'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $ticket_id = Crypt::decrypt($req['ticket_id']);
        $cart = Cart::where('user_id', Auth::user()->id)->where('ticket_id', $ticket_id)->where('deleted_at', null)->first();
        if ($cart) {
            $cart->update([
                "quantity" => $cart->quantity + $req["quantity"]
            ]);
        } else {
            Cart::create([
                "user_id" => Auth::user()->id,
                "ticket_id" => $ticket_id,
                "quantity" => $req["quantity"]
            ]);
        }


        return redirect()->route('BookingPage');
    }

    public function deleteCart(Request $req)
    {
        Cart::where('id', $req["cart_id"])->where('deleted_at', null)->update([
            "deleted_at" => Carbon::now(),
        ]);

        return redirect()->route('BookingPage');
    }
}
