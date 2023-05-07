<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Mail\AdminRegisterMail;
use App\Mail\RegisterMail;
use App\Models\Admin;
use App\Models\Register;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function register(RegisterRequest $registerRequest)
    {
        Register::create($registerRequest->all());

        Mail::to($registerRequest->email)->send(new RegisterMail);
        (User::where('category', 'super-admin')->first()) ? Mail::to(User::where('category', 'super-admin')->first()->email)->send(new AdminRegisterMail) : null;

        return redirect()->route('course.register')->with('status', 'Form submitted successfully');
    }
}
