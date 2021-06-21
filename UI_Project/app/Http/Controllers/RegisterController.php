<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
    public function store(){
        $data=request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'emailaddress' => 'required|email|unique:accounts, email_address',
            'password' => 'required|regex:"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"',
            'confirmpassword' => 'required|same:password'
        ]);
        $account = new \App\Models\Account();
        $account->first_name=request('firstname');
        $account->last_name=request('lastname');
        $account->email_address=request('emailaddress');
        $account->password=request('password');
        $account->save();
        
        return view('thankyou');
    }
}
