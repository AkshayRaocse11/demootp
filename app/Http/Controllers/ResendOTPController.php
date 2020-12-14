<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResendOTPController extends Controller
{

    public function resend()
    {
        $email = auth()->user()->email;
        auth()->user()->sendOTP($email);
        return back()->with('Message', 'Your new OTP is sent, please check !');
    }
}
