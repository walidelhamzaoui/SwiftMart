@extends('layouts.app')
@section('content')
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
        <td>{{$product->description}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->price}}$</td>
        <td>{{$product->category->name}}</td>
        <td class="w-25">
        @if($product->image)
        <img src='storage/{{$product->image}}' class="img-fluid w-75 ">
        @endif
        </td>
      <td class="">
      <div class="d-flex justify-content-center align-items-center mt-5">
      <a href="{{route('products.show', $product->id)}}" class="me-2 "><button class="btn btn-warning">redirect</button></a>
      <form action ='{{route('deletesoft',$product->id)}}' method="get">
      @csrf
      
    
      <button class="btn btn-danger">delete</button>
      </form>
      </div>
    </td>
      
      </tr>
      @empty
      <tr>
    <div class="text-center p-2 m-2"style="background-color: rgb(195, 195, 188);"> 
      <h1>No Product Delete</h1></div>
      @endforelse
      
    </tbody>
  </table>
  @endsection
  {{-- <h1>{{$products->links()}}</h1> --}}