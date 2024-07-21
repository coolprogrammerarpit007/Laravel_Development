<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact-form');
    }

    public function contact(Request $request){

        echo "<pre>";
            print_r($request->all());
        echo "</pre";

    }
}
