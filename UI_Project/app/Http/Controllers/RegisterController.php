<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;

class RegisterController extends Controller
{
    public function register(){
        $accounts = \App\Models\Account::all();
        // dd($accounts);
        return view('register', compact('accounts'));
    }
    public function thankyou(){
        
        return view('thankyou');
    }
    public function login(){
        return view('login');
    }
    public function home(){
        $data=request()->validate([
            'emailaddress' => 'required|email|',
            'password' => 'required|regex:"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"', //password 1 digit, 1 number and minimum 8 characters
        ]);
        return view('home');
    }
    public function store(){
        $data=request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'emailaddress' => 'required|email|unique:App\Models\Account,email_address',
            'password' => 'required|regex:"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"', //password 1 digit, 1 number and minimum 8 characters
            'confirmpassword' => 'required|same:password'
        ]);
        $account = new \App\Models\Account();
        $account->first_name=request('firstname');
        $account->last_name=request('lastname');
        $account->email_address=request('emailaddress');
        $account->password=request('password');
        $account->save();
        Mail::to(request('emailaddress'))->send(new VerifyMail());
        
        return view('thankyou');
    }
}
