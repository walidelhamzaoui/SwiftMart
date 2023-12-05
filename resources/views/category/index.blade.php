@extends('layouts.app')

@section('content')
<div class="form-group text-end">
  <a href="{{route('categories.create')}}" class="btn btn-info fs-5 ">create</a>
  </div>
<table class="table table-hover">
    
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name category</th>
            <th scope="col">show</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
          <tr>
          
          <th scope="row">{{$category->id}}</th>
          <td>{{$category->name}}</td>
          <td><a href="{{route('categories.show',$category->id)}}" class="btn btn-info">show</a></td>
       
          <td><div class="form-group d-flex">
            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">edit</a>
          <form action={{route('categories.destroy',$category->id)}} method='post'>
          @csrf 
          @method('DELETE')
          <button class="btn btn-danger ms-2">DELETE</button>
          </form>
          </div>
          </td>
          @empty
             <tr><div class="text-center p-2 m-2" style="background-color: rgb(195, 195, 188)">
              <h1> No Categories</h1>
              </div></tr> 
    
           
          </tr>
          @endforelse
        </tbody>
      
  </table>
  <h1>{{$categories->links()}}</h1>
@endsection