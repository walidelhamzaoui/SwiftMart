<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/logo1.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shopping</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body >

@include('shared.nav')
@include('shared.slidetext')
@include('shared.form')

@include('shared.slide')  



                        
                        <h2 class="text-center m-3 mt-5 "  style="color:rgb(189, 62, 24)">Products</h2>
                            <div class="row "id="shopa" >
                                @forelse ($productsget as $product)
                                 
                                      
                                  
                                    <div class="col-lg-3 lh-lg  mb-1 mt-5">
                                        <div class="card "  >
                                            @if (!$product->image == null)
                                            <div class=""  style="height:fit-content;">
                                                {{-- <img src="{{ asset($product->image) }}" class="img-fluid  " style="height:200px;"> --}}
                                                <img src='storage/{{ $product->image }}' class="img-fluid " >
                                                
                                            </div>
                                        @else
                                            <div>
                                                <img src="/IMG1.png" class="img-fluid">
                                            </div>
                                        @endif
                                        
                                            <div class="card-body" id="shop">
                                            
                                                <h5 class="text-black text-    " style="height:45px">{{ $product->name }}</h5>
                                                <div class="">
                                                <h4 class="card-text  text-black-50">{{ $product->category->name }}</h4>
                                                <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="text-black  ">${{$product->price-4}} </h5>
                                                <h5 class="text-black-50  "style="text-decoration: line-through">${{$product->price}} </h5>
                                                </div>
                                            </div>
                                                {{-- <p class=" "style="height:200px; mt-5">{{ $product->description }}</p> --}}
                                                <div class="d-flex justify-content-start align-items-end mt-1 " >
                                                  
                                                {{-- <h5 class=" text-primary "> quantity :{{ $product->quantity }}</h5> --}}
                                                {{-- <button class="btn btn-danger text-center">add to card</button> --}}
                                                <div class=" px-2 py-1"  style="background-color:rgb(9, 9, 8);border-radius:5px" >
                                               <a href="{{route('photos.show',$product->id)}}" > <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                  </svg></a>
                                                </div>
                                                </div>
                                                
                                                
                                                
                        
                       
                        
                    </div>
                </div>
              
            </div>
            @empty
                 <tr >  <h3 class="text-center   p-5" style="background-color: rgb(195, 195, 188);">NO products Search again</h3> </tr>                  
            @endforelse
           <div class="d-flex justify-content-center align-items-center pt-3 pb-2"> 
   <div class="text-center">{{$productsget->links()}}</div>
   </div>
                       

 </div>
</div>
@include('shared.contatc')
@include('shared.footer')
</body>
</html>