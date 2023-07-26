<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submit(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'email' => 'required|email',
                'name' => 'required',
                'message' => 'required'
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('ContactPage');
        }

        $subject = "Contact Form Submission";
        $body = "Name: " . $req['name'] . "\n";
        $body .= "Email: " . $req['email'] . "\n";
        $body .= "Message: " . $req['message'];

        $recipient = "bandungtour@gmail.com";

        $headers = "From: " . $req['email'] . "\r\n";
        $headers .= "Reply-To: " . $req['email'] . "\r\n";

        return redirect('https://mail.google.com/');
    }
}
