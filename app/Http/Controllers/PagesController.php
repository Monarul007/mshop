<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function requestDesign(){
        return view('submit-design');
    }
    public function shop(){
        return view('shop');
    }
    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }
}
