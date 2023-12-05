@extends('layouts.app')

@section('content')
<div class="container w-100 d-flex justify-content-lg-center align-items-lg-center ">
<div class="row  w-50  ">
    <form method="post" action="{{ route('products.update', $products->id) }}" class="lg-lh" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <h3 class="text-center">Edit Product</h3>
<div class="form-group">
<label class="form-label">name</label>
<input type='text' class="form-control" name='name' value="{{$products->name}}">

   

    

</div>
<div class="form-group">
<label class="form-label">description</label>

<textarea class="form-control" name="description">{{$products->description}}</textarea>


   

</div>
<div class="form-group">
<label class="form-label">Quantity</label>
<input type='text' class="form-control"name="quantity" value={{$products->quantity}}>

   

</div>
<div class="form-group">
<label class="form-label">price</label>
<input type='text' class="form-control" name="price" value={{$products->price}}>

   

</div>
<div class="form-group">
<label class="form-label">photo</label>
<input type='file' class="form-control" name="photo">
@if($products )
    <img src='/storage/{{$products->image}}' alt="Product Image" class="img-fluid w-50">
@endif
   

</div>
<label  class="mt-3">categories</label>
<select class="form-control" name="category_id" id="category_id">
<option value="">Select Category</option>
@foreach ($categories as $category)
<option @selected($products->category->id) value={{$category->id}}>{{$category->name}}</option>
    
@endforeach

</select>

   

<div class="form-group mt-3 text-start w-100">
<button class="btn btn-danger ">Update</button>
</div>
</form>
</div>
</div>
@endsection