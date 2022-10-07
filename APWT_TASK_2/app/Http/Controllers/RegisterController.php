<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
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
        $passenger = new Passenger();
        $passenger->name = $request->name;
        $passenger->password = $request->password;    
        $passenger->email = $request->email;
        $passenger->phone = $request->phone;
        $passenger->save();
        return redirect()->route('login');

    }
}
