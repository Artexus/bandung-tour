<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $sites = Site::orderBy('average_rating', 'DESC')->offset(0)->limit(8)->get();
        return view('gallery')->with('sites', $sites);
    }
}
