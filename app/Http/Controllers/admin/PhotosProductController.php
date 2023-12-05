<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;

class PhotosProductController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos=Photo::query()->with('product')->paginate(4);
        // $products=Product::query()->with('category')->get();
        return view('user.admin.index',['photos' => $photos]);
}


    /**
     * Show the form for creating a new resource.
     */
    
        public function create(){
            $products=Product::all();
            return view('user.admin.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // $path = $product->image;
        if($request->hasFile('photos')){
            $photo=$request->file('photos')->getClientOriginalName();
            $paths=$request->file('photos')->storeAs('img',$photo,'public');
            
            }
       
        
 
            Photo::create([
            'photo' =>$paths,
            "products_id"=>$request->products_id,
            
            
            ]);
            
            return redirect()->route('photos.index');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupère le produit correspondant à l'ID
        $product = Product::findOrFail($id);
    
        // Récupère toutes les photos ayant le même ID de produit
        $photos = Photo::where('products_id', $product->id)->get();
    
        return view('user.admin.show', ['photos' => $photos,"product" => $product]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $photos=Photo::findOrFail($id);
        $products=Product::all();
        return view('user.admin.edit', ['photos' => $photos,"products"=>$products]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $photos=Photo::findOrFail($id);
       $paths=$photos->photo;
       if($request->hasFile('photo')){
       $image=$request->file('photo')->getClientOriginalName();
       $paths=$request->file('photo')->storeAs('img',$image,'public');
       
       };
       $photos->update([
       'photo' => $paths,
       'products_id'=>$request->products_id,
       
       ]);
       return redirect()->route('photos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $photo=Photo::find($id);
        $photo->delete();
        return redirect()-route('photo.index');
    }
    // public function indexshow(){
        
    //         $photo=Photo::get()->product;
    //         // $photos=$products->photo()->get();
    //         // return view('user.admin.show',['photos'=>$photos]);
        
    // return ()
    // }
}
