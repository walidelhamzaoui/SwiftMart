@extends('layouts.storeapp')

@include('shared.nav')
@include('shared.slidetext')
  <div class="container pt-5">
  <div class="row  d-flex  justify-content-center align-items-center ">
  <div class="col-lg-3 col-12    ">
      @foreach($photos as $photo)
          
              {{-- <td scope="row">{{ $photo->id }}</td> --}}
              <img src="/storage/{{ $photo->photo }}" class=" pt-2 pb-2  " style="width:100px; border-radius:6px " onmouseover="main.src=this.src">
          
      @endforeach
  </div>
  <div class="col-lg-3 col-12 ">
<img src="/storage/{{ $product->image }}" class="img-fluid"  name="main">
{{-- <img src="{{asset( $product->image)}}" class="img-fluid"  name="main"> --}}

  </div>
  <div class="col-lg-3 col-12  lh-lg ">
  <h1 class="text-uppercase ">{{ $product->name }}</h1>
  <h5 >{{ $product->description }}</h5>
  <h4> $ {{ $product->price }} </h4>
  <h4>{{ $product->quantity }}</h4>
  <div><img src="/storage/{{ $product->image }}" class="w-25" style="" ></div>
  {{-- <h5><img src="{{asset( $product->image)}}" class="w-25" style="" ></h5> --}}
  
  <form action="{{route('add.cart',$product)}}" method="Post">
  @csrf
  <div class="from-group">
  <label for="" class="form-label">quantity</label>
  <input type="number" class="form-control" id="qty"name="qty" value="1">
  <div class="from-group text-end">
  <button class="btn btn-dark text-white  mt-2 w-50">add_cart</button>
  </div>
  </div>
  </form>
  </div>
  </div>
  
  </div>
  </div>



