<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    }
    public function store(Request $request){
        echo "<pre>";
            print_r($request->all());

        // first you need to create object of the Model class
        $customer = new Customers();
        // now to indert data
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->city = $request['city'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);


        // now save data
        $customer->save();

    }
}
