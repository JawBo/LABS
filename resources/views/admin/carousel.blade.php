@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="text-center">Carousel</h1>
@stop



@section('content')
<div>
    <form action="/create/img" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Create</button>
    </form>
    <div class="row">
        @foreach ($carousel as $key=> $item)
        @if ($item->section == 'carousel')


        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" width="300px;" src="{{Storage::url('public/img/carousel/resized/'.$item->image)}}"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <form action="/delete/img/{{$item->id}}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>


        </div>
        @endif
        @endforeach
    </div>
</div>
@stop
