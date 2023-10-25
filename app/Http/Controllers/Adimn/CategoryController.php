<?php

namespace App\Http\Controllers\Adimn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        return view('admin.category.index');
    }//end method
    public function add_category(){
        return view('admin.category.add_category');
    }//end method
}
