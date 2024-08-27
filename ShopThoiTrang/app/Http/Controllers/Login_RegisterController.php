<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_RegisterController extends Controller
{
    public function index()
    {
        return view('login_register.index');
    }
}
