<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login')->with('disableNavbar', true)->with('disableFooter', true);
    }
    public function postLogin(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if (Auth::attempt(['email' => $req['email'], 'password' => $req['password']])) {
            return redirect()->route('HomePage');
        }
        return redirect()->back()->withErrors('Wrong password or Email');
    }
}
