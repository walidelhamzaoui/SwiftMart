@php
$categorieId=\Illuminate\Support\Facades\Request::input('categories')??[];

@endphp
<style>
#name{
/* padding: 10px; */
background-color: rgb(243, 241, 239);
/* border: 2px solid rgb(165, 147, 147); */
padding: 9px 93px 10px 9px;
width:350px
}
#categories:focus {
    background-color: rgb(243, 241, 239);
    

    box-shadow: none;
    outline: none;
    /* border: 2px solid black; */
}
#categories {
    /* padding: 10px; */
    background-color: rgb(243, 241, 239);
/* border: 2px solid rgb(165, 147, 147); */
    /* box-shadow: none;
    outline: none;
    border: 1px solid black; */
    /* background-color: rgb(73, 219, 104);color: white */
    
}
/* #categories {
    background-color: aqua
    
} */

input[type=text]:focus{
box-shadow: none;
outline: none;
/* border: 1px solid black */
border:2px solid black;
background-color: rgb(243, 241, 239);

}
.btn:focus{

border: none
}
.c{
    position: relative;
}
.search{
position:absolute;
right:0%;bottom:0%; 
margin-bottom:12px ;
margin-right:70px
 
}
[type="submit"]:focus {
    border: none;
}
/* CSS code */
[type="submit"] {
    border: none;
    background-color: transparent !important;
}
/* .removetext{
display: none;

} */
#iconrevome{

    position: relative;
    right: 105px;
    display: none; 
    top:10px
}
</style>
    
    
    
    <div class=" container   pb-2 pt-2"  >
        
        <form action="  " method="get" class=" row d-flex justify-content-around  ">
          

        {{-- <div class="form-group d-flex  d-column mt-3 col-lg-3 col-md-6  ">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#341671" class=" mt-1 me-2 mb-2 bi bi-bag-fill" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
              </svg>
            <h1 class="" style="color:#341671 ">Shopping</h1>
            </div> --}}
           
       
                <div class="form-group  col-lg-3 mt-3 d-flex  justify-content-end col-md-6  c gap-3 ">
                    {{-- <label for="name" class=" fs-6"  style="color:#341671 ">Name</label> --}}
                        <input type="text"  onkeyup="ad()" name="name" id="name" class=" form-control   mt-1 " placeholder="Search " value="{{\Illuminate\Support\Facades\Request::input("name")}}" >
                       <button class="btn" style="color:rgb(12, 12, 12);border:none background:transparent"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black" class=" search bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                        </button>
                          <div class="" id="iconrevome" onclick="remove1()">
                              <a href="{{route('store')}}" style="text-dark"><svg  xmlns="http://www.w3.org/2000/svg"  width="20" height="20" fill="black" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                              </svg></a>
                          </div>
                          
                    
                    
                        {{-- <button class="btn "style="background-color:rgb(189, 62, 24)"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-check2" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                          </svg></button> --}}
                        {{-- <a href="{{route('store')}}" class="btn  " style="background-color:#AE2D68" onclick="reset()" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                          </svg></a>  --}}
                          </div>
                          <div class="form-group mt-3 d-flex justify-content-center align-items-center text-start flex-wrap  gap-4">
                            {{-- <label class="fs-6" style="color:#341671">Category</label> --}}
                            {{-- <div name="categories" id="categories" class="form-select p-2 p-lg-2 rounded-pill"> --}}
                                {{-- <option value="">Select Category</option> --}}
                                @foreach($categories as $category)
                                    {{-- <a href="/#shopa" class="btn btn-primary fs-4 mb-1" style="background-color:transparent; border:none"> --}}
                                        <button type="submit" name="categories"  class="fs-4 mb-1 text-capitalize " value="{{ $category->id }}">
                                         {{ $category->name }}
                                        </button>
                                    {{-- </a> --}}
                                @endforeach
                            {{-- </div> --}}
                        </div>
            </form>
            {{-- <div class="form-group  col-lg-1 col-md-3">
            <label class="form-group fs-4">min price</label>
            <input type="number" name="min" value="{{\Illuminate\Support\Facades\Request::input("min")}}"  min="{{ $priceoption->minprice}}" max="{{ $priceoption->maxprice}}"/>
            </div>
            <div class="form-group  col-lg-1 col-md-3">
            <label class="form-group fs-4">max price</label>
            <input type="number" name="max" value="{{\Illuminate\Support\Facades\Request::input("max")}}"min="{{ $priceoption->minprice}}"  max="{{ $priceoption->maxprice}}"/>
            </div> --}}
            <script>
            let name=document.getElementById('name');
            let iconr=document.getElementById('iconrevome');
            function ad(){
            if(name.value===""){
                iconr.style="display:none"
            }else{
                name.style.marginRight = '-40px';
                iconr.style="display:block";
            }
             function remove1(){
             name.value=="";
             
             }
            }
            </script>
          
          