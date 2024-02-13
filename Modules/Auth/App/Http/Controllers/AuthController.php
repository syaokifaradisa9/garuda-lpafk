<?php

namespace Modules\Auth\App\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Auth\Services\AuthService;
use Modules\Auth\App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    private $service;
    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function login(){
        return view('auth::login');
    }

    public function verify(LoginRequest $request){
        try{
            $this->service->verify($request->email, $request->password);
            return to_route('gateway');
        }catch(Exception $e){
            return back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function gateway(){
        return view('auth::gateway');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('auth.login');
    }
}
