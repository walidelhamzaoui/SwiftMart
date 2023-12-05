@extends('layouts.storeapp')
<div class="col-12 d-none d-lg-block d-md-block">
@include('shared.nav')
@include('shared.slidetext')</div>
<style>
    input[type=number]{
    /* padding: 10px; */
    background-color: rgb(243, 241, 239);
    border: 2px solid rgb(18, 9, 9);
    
    
    }</style>
@section('content')
<div class="container" >
    <div class="row">
        @if($cartitems->count() > 0)
        <div class="  p-3 ">
       <h1 class="text-dark ms-3">votre paniel</h1> </div>
            <table class="table border border-2" >
                <!-- Table headers -->
                <thead>
                    <tr>
                        <th >id</th>
                        <th >name</th>
                        <th >image</th>
                        <th >quantity</th>
                        <th >price</th>
                        <th >total</th>
                        <th ></th>
                        <th >action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through cart items -->
                    @foreach($cartitems as $cart)
                        <tr style="">
                            <!-- Display cart item details -->
                            <th scope="row">{{ $cart->id }}</th>
                            <td>{{ $cart->name }}</td>
                            <td><img src='/storage/{{ $cart->model->image }}' class="img-fluid  " style="width:220px"></td>
                            {{-- <td><img src="{{asset ($cart->model->image) }}"class="img-fluid" style="width:220px"></td> --}}
                           <td class=""> <form action="{{ route('update.cart') }}" method="POST" class="d-flex   ">
                                @csrf
                                @method("PUT")
                                <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                <!-- Input field to update quantity -->
                                <input type="number" class="border border-0 qty-input" name="qty" value="{{ $cart->qty }}" data-cart-id="{{ $cart->id }}">
                                <!-- Input field to update price -->
                                <input type="hidden" class="form-control price-input" name="price" value="{{ $cart->price }}">
                                <button type="submit" class="btn btn-warning ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                  </svg></button>
                            </form>
                           
                            
                           </td>
                            <td>${{ $cart->price }}</td>
                            <td>${{ $cart->subtotal }}</td>
                            <td>{{ $cart->description }}</td>
                            <td class="">
                            <form action="{{ route('remove.cart', $cart->rowId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" class="form-control qty-input" name="qty" value="{{ $cart->qty }}" data-cart-id="{{ $cart->id }}">
                                <input type="hidden" name="rowId" value="{{ $cart->rowId }}">

                                <button type="submit" class="btn me-5 "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                  </svg>
                                  </button>
                            </form>
                            </td>
                        </tr>
                       
                    @endforeach
                </tbody>
                
            </table>
        @else
            <h1 class="text-center mt-5 pt-5 fs-1 pb-5 mb-5" style="background-color: rgb(184, 180, 173)">No Product</h1>
        @endif
        <div class="d-flex justify-content-between">
            <div class="">
                <a href="{{route('store')}}" class="btn p-2 text-white fs-5 "style=" background-color:rgb(189, 62, 24)"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                  </svg>   Continue Shopping
                  </a>
            </div>
            <div class="ms-5 text-end">
                <form action="{{ route('clean.cart') }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn   fs-5" style="color:rgb(189, 62, 24)">Clear All</button>
                </form>
            </div>
        </div>
        <!-- Cart totals -->
        <div class="mt-3" style="position: relative">
            <div class="cart-box me-3 col-12  d-flex justify-content-lg-end " style="">
                <div class="top-details p-4 " style="background-color: rgb(224, 217, 217)">
                    <h4 class="text-center">Cart total :</h4>
                    <div class="d-flex justify-content-around">
                    <h6 class="pe-5 gap-6">Subtotal: </h6>
                    <h6 class="ms-3">{{ Cart::instance('cart')->subtotal() }}</h6>
                    </div>
                    <div class="d-flex justify-content-around">
                    <h6 class="pe-5">Tax</h6> 
                    <h6 class="ms-5">{{ Cart::instance('cart')->tax() }}</h6>
                    </div>
                    <div class="d-flex justify-content-around">
                    <h6 class="pe-5">Total:</h6>
                    <h6 class="ms-5">{{ Cart::instance('cart')->total() }}</h6></div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection