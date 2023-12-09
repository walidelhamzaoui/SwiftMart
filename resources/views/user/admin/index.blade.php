@extends('layouts.app')

@section('content')
<div class="form-group text-end">
  <a href="{{route('photos.create')}}" class="btn btn-info fs-5 ">create</a>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Product_id</th>
      {{-- <th scope=""></th> --}}
      <th scope="">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($photos as $photo)
    <tr>
      <td scope="row">{{$photo->id}}</td>
      <td> <img src="/storage/{{$photo->photo}}" class=" img-fluid " style="height:250px"></td>
      <td>{{$photo->products_id}} </td>
      
      <td>
      <div class="form-group d-flex ">
      <a href="{{route('photos.edit',$photo->id)}}" class="btn btn-warning me-2">edit</a>
        <form action ='{{route('photos.destroy',$photo->id)}}' method="post">
          @csrf
          @method("DELETE")
        
          <button class="btn btn-danger">delete</button>
          </form>
      </div>
      </td>
    </tr>
    @empty
    <tr>
    <div class="text-center p-2 m-2" style="background-color: rgb(195, 195, 188)">
      <h1> No photos</h1>
      </div></tr> 
    @endforelse
  </tbody>
</table>
<h1>{{$photos->links()}}</h1>
@endsection