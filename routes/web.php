<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PhotosProductController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\editor\DashboardController as EditorDashboardController;
use App\Http\Controllers\editor\DashboardEditorController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\test\tectcontroller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::middleware(['auth','admin'])->group(function () {
Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
Route::get('softdelete',[ProductController::class,'softdelete'])->name('softdelete');
Route::get('deletesoft/{id}',[ProductController::class,'deletesoft'])->name('deletesoft');
Route::resource('photos',PhotosProductController::class);
Route::get('dashboard/admin',[DashboardController::class,'index'])->name('dashboard_admin');
Route::get('indexshow/{id}',[DashboardController::class,'indexshow'])->name('showadmin');
});
Route::get('/',[StoreController::class,'index'])->name('store');
// Route::middleware(['auth','editor'])->group(function () {
// ;});
Route::get('indexshow',[PhotosProductController::class ,'indexshow']);
Route::get('dashboard/editor',[DashboardEditorController::class,'index'])->name('dashboard_editor');;
Route::get('dashboard/editor',[DashboardEditorController::class,'index'])->name('dashboard_editor');;
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::middleware(['auth'])->group(function(){

Route::get('/cart', [CartController::class,'index' ])->name('cart.index');
Route::post('/add/cart/{product}', [CartController::class,'addProductToCart' ])->name('add.cart');

Route::put('/cart/update',  [CartController::class, 'updatcard'])->name('update.cart');

Route::delete('remove/cart', [CartController::class, 'removecart'])->name('remove.cart');
Route::delete('clear/cart', [CartController::class, 'clearcart'])->name('clean.cart');
});
Route::get('index/test', [tectcontroller::class, 'index'])->name('index');
;

Route::get('categorie/test',function(){
    $api_url = 'https://fakestoreapi.com/products/categories';
    //  dd($api_url);
     $categoriesApi=file_get_contents($api_url);
    $categories=json_decode($categoriesApi);
    if($categories!== null){
        foreach($categories as $category){
       
        Category::create([
            'name' => $category
        ]);
    }
    r;
    
};
    
});

// Route::get('categorie/test', function () {
//     $api_url = 'https://api.escuelajs.co/api/v1/categories';
    
//     $categoriesApi = file_get_contents($api_url);
//     $categories = json_decode($categoriesApi);

//     if ($categories !== null) {
//         foreach ($categories as $category) {
//             Category::create([
//                 'name' => $category->name,
//             ]);
//         }
//         return 'Categories created successfully!';
//     } else {
//         return 'Failed to retrieve or decode categories.';
//     }
// });



Route::get('product/test',function(){
    $api_url = 'https://fakestoreapi.com/products';
    //  dd($api_url);
     $productsapi=file_get_contents($api_url);
    $products=json_decode($productsapi);
    foreach($products as $product){
   
        $catId= Category::where('name',$product->category)->get();
//   return $catId;
    // return $product;
  Product::create([
  'name' => $product->title,
  'description' => $product->description,
  'price' => $product->price,
  'image' => $product->image,
   'category_id' => $catId[0]->id,
   'quantity' => $product->rating->count,
  
  ]);
};
return'reusit';
});


