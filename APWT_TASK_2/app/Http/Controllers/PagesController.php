<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('inc.topbar');
    }
    public function contact(){
        return view('contact');
    }
    public function sendContact(Request $request){
        $validate = $request->validate([
            'subject' => 'required|max:100',
            'body' => 'required',
            'email'=>'email'
        ]);

        $email = $request->email;
        $subject = $request->subject;
        $body = $request->body;
        return view('contactshow')->with('email', $email)->with('subject', $subject)->with('body', $body);
   
    }



}
