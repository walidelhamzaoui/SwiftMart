<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index(){
    return view('user.admin.dashboard');
}
    

public function indexshow($id){
    $products=Product::findOrFail($id);
    return view('user.admin.show',['products'=>$products]);
}
    
}
