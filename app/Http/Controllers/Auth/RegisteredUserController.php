<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

use App\Mail\OtpMail;
use Illuminate\Support\Facades\Mail;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // In your store method
    public function store(Request $request): RedirectResponse
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|confirmed',
        'otp' => 'required|string|size:6',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['otp' => 'User not found.'])->withInput();
    }

    // Check if OTP is valid or expired
    if ($user->otp !== $request->otp || Carbon::parse($user->otp_expires_at)->isPast()) {
        return back()->withErrors(['otp' => 'Invalid or expired OTP.'])->withInput();
    }

    // Check if the user is already registered and has a password
    if ($user->password) {
        return back()->withErrors(['email' => 'This email is already registered. Please log in.'])->withInput();
    }

    // Clear OTP and update the password
    $user->otp = null;
    $user->otp_expires_at = null;
    $user->password = Hash::make($request->password);
    $user->name = $request->name; // Update the user's name
    $user->save();

    // Log in the user
    Auth::login($user);

    // Redirect to the dashboard or any other intended page
    return redirect()->route('dashboard');
}



}
