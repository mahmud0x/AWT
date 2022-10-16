<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Manager;


class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function manager(){
        return view('manager');
    }

    public function newRegister(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "password"=>"required|min:4",
            'email'=>'email',
            'phone'=>'required|max:11|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        ['name.required'=>"Please put your name here"
        ]
    );
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->password = $request->password;    
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->save();
        return redirect()->route('login');
    }
    public function login(){
        return view('login');
    }
    public function logincheck(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        $customer = Customer::where('email', '=', $request->email)
                ->where('password', '=', $request->password)
                ->first();
        $manager = Manager::where('email', '=', $request->email)
        ->where('password', '=', $request->password)
        ->first();
        if ($customer) {
            $request->session()->put('user',$customer->name);
            return redirect()->route('menu');
        }
        else if($manager) {
            $request->session()->put('user',$manager->email);
            return redirect()->route('orderlist');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
