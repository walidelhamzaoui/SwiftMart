@extends('layouts.app')

@section('content')
<h3>{{$categories->name}}</h3>
  <table class="table table-hover">
        <thead>

        <tr>
            <th scope="row">id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Categoty</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Img</th>
            <th>Action</th>

          </tr>

        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td scope="col">{{$product->id}}</td>
                <td scope="col">{{$product->name}}</td>
                <td scope="col">{{$product->description}}</td>
                <td scope="col">{{$categories->name}}</td>
                <td scope="col">{{$product->quantity}}</td>
                <td scope="col">{{$product->price}}</td>
                <td scope="col"><img src='/storage/{{$product->image}}'class="img-fluid w-75"></td>
                <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">update</a></td>
              </tr>
              @empty
            <h5 class="text-center bg-danger p-4 fs-4">No Products</h5>
              @endforelse
        </tbody>
      </table>

@endsection