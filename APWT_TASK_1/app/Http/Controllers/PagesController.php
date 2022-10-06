<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function ourteam(){
        return view('team');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function contactus(){
        return view('contact');
    }
    public function service(){
        $services=array("Dummy Service-1", "Dummy Service-2", "Dummy Service-3","Dummy Service-4");
        return view('service')->with('services', $services);
    }
}
