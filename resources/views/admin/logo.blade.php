@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">Logo Website</h1>
@stop

 

@section('content')
 
<form action="/create/logo" method="post" enctype="multipart/form-data">
  @csrf
  <input type="file" name="image" >
<button type="submit">Create</button>
</form>

<div class="row">
    @foreach ($contenulogo as $key=> $item)
    @if ($item->section == 'logo')
        
    
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" width="300px" src="{{Storage::url('public/img/logo/resized/'.$item->image)}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          
          <form action="/delete/logo/{{$item->id}}" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>        </div>
      </div>
    </div>
    @endif
    @endforeach  
  </div>

@stop