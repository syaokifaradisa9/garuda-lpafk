<?php

namespace Modules\Auth\App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('auth::login');
    }
}
