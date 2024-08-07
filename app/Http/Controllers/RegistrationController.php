<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function form(){
        return view('form');
    }

    public function register(Request $request){

        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "password" => 'required',
            "confirm_password" => 'required|same:password'
        ]);

        echo "<pre>". "";
            print_r($request -> all());
        echo  "</pre>" . "";
    }
}
