<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function registered()
    {
        return view('registered');
    }
}
