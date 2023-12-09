<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index(){
$products=Product::query()->count();
$Categories=Category::query()->count();
$photos=Photo::query()->count();
$users=User::query()->where('role','user')->count();
    return view('user.admin.dashboard',['products'=>$products,"Categories"=>$Categories,"photos"=>$photos,"users"=>$users]);
}

    

// public function indexshow($id){
//     $products=Product::findOrFail($id);
//     return view('user.admin.show',['products'=>$products]);
// }
    
}
