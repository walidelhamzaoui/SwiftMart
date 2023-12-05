<!-- Form -->
@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('photos.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photos" class="form-control" id="photos" >
    
    <select name="products_id" id="products_id" class="form-select">

        @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->id }} {{ $product->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-danger">Ajouter</button>
</form>

<!-- Affichage des photos après avoir choisi un produit -->
{{-- @if(isset($selectedProduct))
    <h2>Photos pour {{$selectedProduct->name}}</h2>
    @foreach($selectedProduct->photos as $photo)
        <img src="/storage/{{$photo->photo}}" alt="Photo {{$photo->id}}"> --}}
    {{-- @endforeach
@endif --}}
@endsection