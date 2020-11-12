<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function myaccount(){
        return view('customers.account');
    }

    public function orderHistory(){
        return view('customers.order-history');
    }

    public function editProfile(){
        return view('customers.edit-account');
    }
}
