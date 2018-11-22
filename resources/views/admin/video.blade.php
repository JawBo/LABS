@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">Carousel</h1>
@stop

@section('content')
  <div> 
    <form action="/newvideo" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" name="url" >
      <button type="submit">Create</button>
    </form>
<div class="row">
    @foreach ($videos as $key=> $item)

  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">
          <a href="">{{$item->url}} </a>
        </h5>
          <form action="/delete/video/{{$item->id}}" method="post">
             @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach  
  </div>
</div>
@stop