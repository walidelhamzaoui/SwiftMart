@extends('layouts.app')
@section('content')
<div class="form-group text-end">
  <a href="{{route('products.create')}}" class="btn btn-info fs-5 ">create</a>
  </div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
        <th scope="col">categoru</th>
        <th scope="col">photo</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
       
        
      <tr>
      
        <th scope="row">{{$product->id}}</th>
        <th scope="row">{{$product->name}}</th>
        <td class="w-100 fs-6">{{$product->description}}</td>
        {{-- <td>{{$product->quantity}}</td> --}}
        <td>{{$product->price}}$</td>
        <td>{{$product->category->name}}</td>
        <td class="">
          {{-- @if(isset($product->images) && is_string($product->images)) --}}
              <img src='storage/{{ $product->image}}' class="img-fluid">
          {{-- @endif --}}
      </td>
      <td class="">
      <div class="d-flex justify-content-center align-items-center mt-5">
      <a href="{{route('products.edit', $product->id)}}" class="me-2 "><button class="btn btn-warning">edite</button></a>
      <form action ='{{route('products.destroy',$product->id)}}' method="post">
      @csrf
      @method("DELETE")
    
      <button class="btn btn-danger">delete</button>
      </form>
      </div>
    </td>
      
      </tr>
      @empty
      <tr>
    <div class="text-center p-2 m-2"style="background-color: rgb(195, 195, 188);"> 
      <h1>No Product</h1></div>
      @endforelse
      
    </tbody>
  </table>
  <h1>{{$products->links()}}</h1>
@endsection