<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/logo1.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SwiftMart</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
body{
position: relative;
}
.scrolla{
position:fixed;
bottom: 0;
right: 0;
padding-bottom:15px;
padding-right::5px;
cursor:pointer;
animation-name: icon;
animation-duration:2s;
animation-direction: alternate;
animation-timing-function: linear;
animation-iteration-count: infinite;
z-index:10
}
.scrollbar{
display:none
}
.icon{
position:fixed;
bottom: 0;
left: 0;
z-index: 10;
/* background-color: rgba(0, 0, 0, 0.217); */
margin-left: 10px;
margin-bottom: 10px;
animation-name: icon;
animation-duration:3s;
animation-direction: alternate;
animation-timing-function: linear;
animation-iteration-count: infinite
}
@keyframes icon{
to{
transform: translatex(-20px)

}

}
.icon div{
margin: 15px
}

</style>
<body >
    <div>
    <div class="icon">
    <div class="rounded-3 bg-dark p-2 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
    </div>
    <div class="rounded-4 bg-dark p-2 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg>
    </div>
    <div class="rounded-3 bg-dark p-2 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg>
    </div>
    </div>
    </div>
    <div class="scrolla" id="scroll" ><svg  onclick="scr()" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
      </svg></div>
@include('shared.nav')
@include('shared.slidetext')
@include('shared.form')

@include('shared.slide')  



                        <h1 class=" m-3 mt-5  "  style="color:rgb(11, 11, 10)">Products</h1>
                            <div class="row "id="shopa" >
                                @forelse ($productsget as $product)
                                 
                                      
                                  
                                    <div class="col-lg-3 lh-lg col-md-4  mb-1 mt-5">
                                        <div class="card "  >
                                            
                                            <div class=""  style="height:fit-content;">
                                                {{-- <img src="{{ asset($product->image) }}" class="img-fluid  " style="height:200px;"> --}}
                                                <img src='storage/{{ $product->image }}' class="img-fluid " >
                                                
                                            </div>
                                        
                                        
                                            <div class="card-body" id="shop">
                                            
                                                <h5 class="text-black text-    " style="height:fit-content ">{{ $product->name }}</h5>
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


</body>
@include('shared.contatc')
@include('shared.footer')
<script>
var scrollto=document.getElementById('scroll');

function scr(){
    window.scrollTo({
        top:0, behavior: 'smooth'
    });

}

window.onscroll = function () {
    if(window.scrollY < 300){
        scrollto.classList.add('scrollbar')
    }else{
        scrollto.classList.remove('scrollbar')
    }
}
</script>
</body>
</html>