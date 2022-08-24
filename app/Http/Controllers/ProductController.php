<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function products(){
        /*
        $employees=product::orderBy('id','desc')->paginate(25);
        return view('backend.pages.products',compact('products'));*/
        return 'ok';
    }    
}