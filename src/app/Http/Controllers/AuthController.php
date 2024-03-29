<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;



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
