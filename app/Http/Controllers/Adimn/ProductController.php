<?php

namespace App\Http\Controllers\Adimn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        return view('admin.product.index');
    }//end method
    public function add_product(){
        return view('admin.product.add_product');
    }//end method

    
}
