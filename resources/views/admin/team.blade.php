@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="text-center">Carousel</h1>
@stop

@section('content')
<div> 
  <form action="/newteam" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="name" >
    <input type="text" name="job" placeholder="job" >
    <input type="file" name="image"  >
    <button type="submit">Create</button>
  </form>
<div class="row">
  @foreach ($team as $key=> $item)

<div class="col-md-3">
  <div class="card text-center" style="width: 18rem;">
      <div class="card-body">
      <h5 class="card-title">
        <h3 href="">{{$item->name}} </h3>
        <h4 href="">{{$item->job}} </h4>
        <img width="300px" src="{{'/'.$item->image}}" alt="">

      </h5>
        <hr>

        <form action="/delete/team/{{$item->id}}" method="post">
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
