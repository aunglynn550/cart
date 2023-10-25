<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('client.home'); 
    }//end method


    public function shop(){
        return view('client.shop'); 
    }//end method

    public function cart(){
        return view('client.cart'); 
    }//end method

    public function checkout(){
        return view('client.checkout'); 
    }//end method

     
}
