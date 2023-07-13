<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\ForgotToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function showForgotPassword()
    {
        return view('forgotpassword.index')->with('disableNavbar', true)->with('disableFooter', true);
    }

    public function showForgotPasswordStatus($id)
    {
        $token = ForgotToken::where('token', $id)->where('deleted_at', null)->first();
        if (!$token) {
            return view('forgotpassword.notfound')->with('disableNavbar', true)->with('disableFooter', true);
        }
        return view('forgotpassword.create')->with('disableNavbar', true)->with('disableFooter', true)->with('user_id', $token->user_id);
    }

    public function generateForgotToken(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'email' => 'required|email'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::where('email', $req['email'])->where('deleted_at', null)->first();
        $user->forgottokens()->update(
            [
                'deleted_at' => Carbon::now(),
            ]
        );


        $id = $user->id;

        $uuid = str_replace('-', '', Str::uuid());
        ForgotToken::create(
            [
                "user_id" => $id,
                "token" =>  $uuid,
            ]
        );

        $url = Env::get('APP_URL') . '/forgot/token/' . $uuid;

        $data = array("url" => $url, "name" => $user->name);
        Mail::to($user->email)->send(new ForgotPasswordMail($data));

        return view('forgotpassword.emailsent')->with('disableNavbar', true)->with('disableFooter', true);
    }

    public function submitNewPassword(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'new_password' => 'required',
                'confirm_password' => 'required|same:new_password'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::where('id', $req['user_id'])->first();
        $user->update([
            "password" => Hash::make($req['new_password']),
        ]);

        $user->forgottokens()->update(
            [
                'deleted_at' => Carbon::now(),
            ]
        );

        return view('forgotpassword.success')->with('disableNavbar', true)->with('disableFooter', true);
    }
}
