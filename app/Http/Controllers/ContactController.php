<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact-form');
    }

    public function contact(Request $request){

        $request->validate([
            "f-name" => "required",
            "email" => "required|email",
            "msg" => "required"
        ]);

        echo "<pre>";
            print_r($request->all());
        echo "</pre";

    }
}
