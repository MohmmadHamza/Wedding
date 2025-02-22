<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\OtpMail;

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email'
        ]);
    
        $email = $request->email;
    
        // Check if the user exists
        $user = User::where('email', $email)->first();
    
        // If user exists and OTP was sent less than 1 minute ago, block resending
        if ($user && $user->otp_expires_at && $user->otp_expires_at->gt(Carbon::now())) {
            return response()->json(['message' => 'Please wait 1 minute before requesting a new OTP.'], 429); 
        }
    
        $otp = rand(100000, 999999);
    
        if (!$user) {
            // If the user doesn't exist, create a new user record
            $user = new User();
            $user->email = $email;
            $user->name = ''; 
        }
    
        // Update OTP and expiration time
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinute(); // OTP expires in 1 minute
        $user->save();
    
        // Send the OTP via email
        Mail::to($email)->send(new OtpMail($otp));
    
        // Return a success response
        return response()->json(['message' => 'OTP has been sent to your email.'], 200);
    }
    

}
