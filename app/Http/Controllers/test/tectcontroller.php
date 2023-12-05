<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tectcontroller extends Controller
{
    public function index(){
    
        $api_url = 'https://api.escuelajs.co/api/v1/products';
    //  dd($api_url);
     $products=file_get_contents($api_url);
    $jsoncode=json_decode($products);
    return view('product.index',['products'=>$jsoncode]);
    }
    
}
