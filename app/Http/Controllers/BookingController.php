<?php

namespace App\Http\Controllers;

use App\Models\SiteModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show()
    {
        return view('booking.index');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $data = SiteModel::where('location_name', 'like', '%', $request->name, '%');
            return view('booking.index')->with($data);
        }
    }
}
