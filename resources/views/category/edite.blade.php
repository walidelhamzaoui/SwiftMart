@extends('layouts.app')

@section('content')
<div class="container w-100">
<div class="row  d-flex justify-content-center align-items-center">
<form method="post" action="{{route('categories.update',$categories->id)}}">
    @csrf
   @method("PUT")
   <div class=" form-group  ">
    <h3 class="text-center mt-3 mb-3">edite-category</h3>
   </div>
    <div class="form-group d-flex justify-content-center align-items-center">
    
    <input type="text" name="name" placeholder="entre category" class="form-control w-25" value={{$categories->name}}>
    </div>
    <div class=" form-group text-center mt-3 100">
        <button type="submit" class="btn btn-warning">edite</button>
    </div>
</form>
</div>
</div>
@endsection