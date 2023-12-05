@php
   use Illuminate\Support\Facades\Route;
    $ashboard=(Route::is('dashboard_admin'));
    $products=(Route::is('products.*'));
    $categories=(Route::is('categories.*'));
    $photos=(Route::is('photos.*'));
    $store=(Route::is('store.*'));
    $softdelete=(Route::is('softdelete'));
    $default='list-group-item list-group-item-action  fs-5';
@endphp
<style>
.ka{
position: relative;
height:100%

}
.dropdown-item{

position: absolute;
bottom:0% ;left:0%
}
/* a:hover{
background-color: cornflowerblue;color:beige
} */

</style>

<div class="list-group lh-lg ka " >
<a href="{{route('dashboard_admin')}}" @class([$default,'active'=>$ashboard])  >Dashboard</a>
<a href="{{route('products.index')}}" @class([$default, 'active'=>$products]) >Products</a>
<a href="{{route('categories.index')}}" @class([$default ,'active'=>$categories]) >Categories</a>
<a href="{{route('photos.index')}}" @class([$default ,'active'=>$photos]) >photos</a>
<a href="{{route('store')}}" @class([$default ,'active'=>$store]) >Store</a>
<a href="{{route('softdelete')}}" @class([$default ,'active'=>$softdelete]) >softdelete</a>
<a href="{{route('store')}}" @class([$default ,'active'=>$store]) >bloc</a>
<a href="{{route('store')}}" @class([$default ,'active'=>$store]) >contact</a>
<a href="{{route('store')}}" @class([$default ,'active'=>$store]) >parametre</a>


{{-- <a href="{{route('search')}}" @class([$default ,'active'=>$ --}}
    <a class="dropdown-item text-white p-2 fs-5 text-center  bg-danger list-group-item list-group-item-action" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
 </a>
</div>