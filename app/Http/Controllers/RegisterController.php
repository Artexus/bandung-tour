<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register')->with('disableNavbar', true)->with('disableFooter', true);
    }
    public function postRegister(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                "name" => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|regex:/([0-9]+)[A-Za-z0-9]*/',
            ]
        );

        if (!$validator->fails()) {
            User::create([
                "name" => $req['name'],
                "email" => $req['email'],
                "password" => Hash::make($req['password']),
            ]);
            return redirect(route('LoginPage'));
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }
}
