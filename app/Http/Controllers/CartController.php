<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Product;

//add item to cart
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class CartController extends Controller
{
    
    
        //return cart items
        public function index()
        {
           $cartitems=Cart::instance('cart')->content();
          return  view('user.cart.index',['cartitems'=>$cartitems]);
        }
    
        
       
        
        public function addProductToCart(Request $request, $id)
        {
            $product = Product::findOrFail($id);
            Cart::instance('cart')->add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $request->qty,
                'price' => $product->price,
                'attributes' => [
                    'image' => $product->image,
                    'description' => $product->description,
                    // Other attributes if needed
                ]
            ])->associate('App\Models\Product');
                        return redirect()->route('cart.index');
        
    }
   
    // CartController.php


    public function updatcard(Request $request)
    {
        Cart::instance('cart')->update($request->rowId, $request->qty);
        return redirect()->route("cart.index");
    }


    
    public function removecart(Request $request)
    {
        $rowId=$request->rowId;
        Cart::instance('cart')->remove($rowId);
            return redirect()->route('cart.index');
        }
    public function clearcart()
    {
       
        Cart::instance('cart')->destroy();
            return redirect()->route('cart.index');
        }
        
    
        
    }

