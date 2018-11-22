@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="text-center">Carousel</h1>
@stop

@section('content')
<div> 
  <form action="/newprojects" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="service" >
    <textarea name="text" cols="30" rows="10"></textarea>   
    <input type="file" name="image" >
    @foreach ($projects as $item)
  <i class="{{$item->icone->class}}" style="font-size:40px;"></i>
  <input type="checkbox" name="icone" >
    @endforeach
    <br>
    
    <button type="submit">Create</button>
  </form>
<div class="row">
  @foreach ($projects as $key=> $item)

<div class="col-md-3">
  <div class="card text-center" style="width: 18rem; border:2px solid black; padding:3px; margin-bottom:10px">
      <div class="card-body">
      <h5 class="card-title">
        <h3 href="">{{$item->service}} </h3>
      <img width="100px;" src="{{'/'.$item->image}}" alt="">
        <i class="{{$item->icone->class}}" style="font-size:50px;"></i>
        <h4 href="">{{$item->text}} </h4>

      </h5>
        <hr>

        <form action="/delete/projects/{{$item->id}}" method="post">
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
