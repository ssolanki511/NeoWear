<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GuestController extends BaseController
{
    //views
    public function indexView(){
        return view('guest.index');
    }
    public function signUpView(){
        return view('guest.signup');
    }
    public function signInView(){
        return view('guest.login');
    }
    public function OTPView(){
        return view('guest.otp');
    }
    public function forgotPasswordView(){
        return view('guest.forgot_password');
    }
    public function resetPasswordView(){
        return view('guest.reset_password');
    }
    public function productView(){
        return view('guest.product');
    }
    public function searchView(){
        return view('guest.search');
    }
    public function contactView(){
        return view('guest.contact');
    }
    public function wearsView(){
        return view('guest.wears');
    }


    //validation
    public function signUpSubmit(Request $signUpData){
        $signUpData->validate([
            'username' => 'required|regex:/^\S*$/|min:5|max:12',
            'email' => 'required|email',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#$%@]).+$/|min:6|max:8',
            'c_password' => 'required|same:password'
        ],[
            'username.required' => 'Username is required.',
            'username.regex' => 'Username must not contain spaces.',
            'username.min' => 'Username must be at least 5 characters.',
            'username.max' => 'Username must not exceed 12 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Enter a valid email address.',
            'password.required' => 'Password is required.',
            'password.regex' => 'Password must include uppercase, lowercase, number, and special character.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.max' => 'Password must not exceed 8 characters.',
        ]);
        return view('guest.login', compact('signUpData'));
    }

    public function signInSubmit(Request $signInData){
        $signInData->validate([
            'username' => 'required|regex:/^\S*$/|min:5|max:12',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#$%@]).+$/|min:6|max:8'
        ],[
            'username.required' => 'Username is required.',
            'username.regex' => 'Username must not contain spaces.',
            'username.min' => 'Username must be at least 5 characters.',
            'username.max' => 'Username must not exceed 12 characters.',
            'password.required' => 'Password is required.',
            'password.regex' => 'Password must include uppercase, lowercase, number, and special character.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.max' => 'Password must not exceed 8 characters.',
        ]);
        return view('guest.index', compact('signInData'));
    }

    public function forgotSubmit(Request $forgotData){
        $forgotData->validate([
            'email' => 'required|email',
        ],[
            'email.required' => 'Email is required.',
            'email.email' => 'Enter a valid email address.',
        ]);
        return view('guest.otp', compact('forgotData'));
    }

    public function OTPSubmit(Request $OTPData){
        $OTPData->validate([
            'otp.*' => 'required',
        ],[
            'otp.*.required' => 'Each OTP digit is required.'
        ]);
        return view('guest.reset_password', compact('OTPData'));
    }

    public function resetPasswordSubmit(Request $resetPasswordData){
        $resetPasswordData->validate([
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#$%@]).+$/|min:6|max:8',
            'c_password' => 'required|same:password'
        ],[
            'password.required' => 'Password is required.',
            'password.regex' => 'Password must include uppercase, lowercase, number, and special character.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.max' => 'Password must not exceed 8 characters.',
        ]);
        return view('guest.login', compact('resetPasswordData'));
    }

    public function ContactSubmit(Request $contactData){
        $contactData->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email',
            'address' => 'required|min:10|max:255'
        ], [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least 2 characters.',
            'name.max' => 'The name cannot be more than 50 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'address.required' => 'The address field is required.',
            'address.min' => 'The address must be at least 10 characters.',
            'address.max' => 'The address cannot be more than 255 characters.',
        ]);
        return view('guest.contact', compact('contactData'));
    }
}
