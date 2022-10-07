<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Passenger;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logincheck(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        $passenger = Passenger::where('email', '=', $request->email)
                ->where('password', '=', $request->password)
                ->first();
        if ($passenger) {
            return view('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
}
