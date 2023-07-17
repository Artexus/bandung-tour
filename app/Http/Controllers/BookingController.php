<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function show()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->where('deleted_at', null)->get();
        return view('booking.index')->with('carts', $carts);
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $datas = Site::where('location_name', 'like', '%' . $request->name . '%')->where('deleted_at', null)->get();
            $resps = [];
            foreach ($datas as $data) {
                $tickets = [];

                foreach ($data->tickets as $ticket) {
                    array_push($tickets, [
                        "id" => Crypt::encrypt($ticket->id),
                        "name" => $ticket->name,
                        "price"=> $ticket->price
                    ]);
                }

                array_push($resps, [
                    "id" => Crypt::encrypt($data->id),
                    "location_name" => $data->location_name,
                    "description" => $data->description,
                    "path" => $data->path,
                    "tickets" => $tickets
                ]);
            }

            return response()->json($resps);
        }
    }
}
