@extends('layouts.app')

@section('content')
<div class="container w-100 d-flex justify-content-lg-center align-items-lg-center ">
<div class="row  w-50  ">
<form method="post" action='{{route('products.store')}}' class="lg-lh" enctype="multipart/form-data">
@csrf
<h3 class="text-center">Create Product</h3>
<div class="form-group">
<label class="form-label">name</label>
<input type='text' class="form-control" name='name' value={{old('name')}}>
@error('name')
    <p class="text-danger">{{ $message }}</p>
@enderror
    

</div>
<div class="form-group">
<label class="form-label">description</label>

<textarea class="form-control" name="description">{{ old('description') }}</textarea>

@error('description')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
<div class="form-group">
<label class="form-label">Quantity</label>
<input type='text' class="form-control"name="quantity" value={{old('quantity')}}>
@error('quantity')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
<div class="form-group">
<label class="form-label">price</label>
<input type='text' class="form-control" name="price" value={{old('price')}}>
@error('price')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
<div class="form-group">
<label class="form-label">photo</label>
<input type='file' class="form-control" name="photo">
@error('image')
    <p class="text-danger">{{ $message }}</p>
@enderror
</div>
<label  class="mt-3">categories</label>
<select class="form-control" name="category_id" id="category_id">
<option value="">Select Category</option>
@foreach ($Categories as $category)
<option @selected(old('category_id')) value={{$category->id}}>{{$category->name}}</option>
    
@endforeach

</select>
@error('category_id')
    <p class="text-danger">{{ $message }}</p>
@enderror
<div class="form-group mt-3 text-start w-100">
<button class="btn btn-danger w-25">Ajouter</button>
</div>
</form>
</div>
</div>
@endsection