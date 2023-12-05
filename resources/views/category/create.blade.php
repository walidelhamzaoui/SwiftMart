@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('categories.store')}}">
    @csrf
    
    <h3 class="text-center mt-3 mb-3">create-category</h3>
    <div class="form-group d-flex justify-content-lg-center align-items-lg-center">
    
    <input type="text" name="name" placeholder="Entre category" class="form-control  p-2" value={{old('name')}}>
    
</div>
<div class="text-center mt-3">
    <button type="submit" class="btn btn-danger ">Ajouter</button>
</div>
    
@endsection