<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
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
}
