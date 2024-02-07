<?php

namespace Modules\Auth\Services;

use Exception;
use Illuminate\Support\Facades\Auth;

class AuthService{
    function verify($email, $password){
        $user = Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]);

        if(!$user){
            throw new Exception("Email atau password salah!");
        }
    }
}