<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductValidation;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::query()->with('category')->paginate(5);
        return view('product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories=Category::all();
        return view('product.create',["Categories"=>$Categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    //  $productValidation = $request->validated();

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->getClientOriginalName();
        $image1 = $request->file('photo')->storeAs('images', $path,'public');
        // $productValidation['image'] = $Path;
   
    }
    // Create the Product using the validated data
    Product::create([
    'name'=>$request->name,
    'description'=>$request->description,
    'quantity'=>$request->quantity,
    'price'=>$request->price,
    'image'=>$image1,
    'category_id'=>$request->category_id,
    

    ]); 
//     $api_url = 'https://fakestoreapi.com/products';
//     //  dd($api_url);
//      $productsapi=file_get_contents($api_url);
//     $products=json_decode($productsapi);
//     foreach($products as $product){
   
//         $catId= Category::where('name',$product->category)->get();
// //   return $catId;
//     // return $product;
//   Product::create([
//   'name' => $product->title,
//   'description' => $product->description,
//   'price' => $product->price,
//   'image' => $product->image,
//    'category_id' => $catId[0]->id,
//    'quantity' => $product->rating->count,
  
//   ]);
//  return'reusit';
//  });

    return redirect()->route('products.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Product::withTrashed()->where('id', $id)->restore();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products=Product::findOrFail($id);
        $categories=Category::all();
        return view('product.edit',['products'=>$products, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        $path = $product->image; // Preserve the existing image path by default
    
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $photo, 'public');
        }
    
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
        ]);
    
        return redirect()->route('products.index');
    }
    
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index');
    }
    public function softdelete(){
    $products=Product::onlyTrashed()->get();
    return view('product.softdelete',["products"=>$products]);
    
    }
    public function deletesoft(string $id)
    {
        Product::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
