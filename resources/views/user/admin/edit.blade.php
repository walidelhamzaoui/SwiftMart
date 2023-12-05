@extends('layouts.app')
@section('content')

<form method="post" action="{{route('photos.update',$photos->id)}}" class="" enctype="multipart/form-data">
@method('Put')
@csrf
<div class="container  " style="width:450px " >
<div class="row " >
<div class="form-group m-2">
<h1>{{$photos->id}}</h1>
</div>
<div class="form-group m-2">
<input type="file" name="photo" id="photo" class="form-control">
@if($photos)
<img src="/storage/{{$photos->photo}}" alt=""  class=" img-fluid w-25 m-2">
@endif
</div>
<div class="form-group m-2">
    <select name="products_id" id="products_id" class="form-select">

@foreach($products as $product)
<option @selected($product->products_id) value={{$product->id}} >{{$product->id}}{{$product->name}}</option>
@endforeach
</select>
</div>
<div class="form-group m-2 ">
{{-- <option @selected($products->category->id) value={{$category->id}}>{{$category->name}}</option> --}}
<button class="btn btn-primary">update</button>
</div>
</div>
</div>
</form>
@endsection