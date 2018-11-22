@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="text-center">Edit Post</h1>
@stop

@section('content')
<div class="text-center">
<img src="{{'/'.$item->image}}" alt="">
<h4>Author : {{$item->user->fname}} {{$item->user->name}}</h3>
<h3> Title: {{$item->name}}</h4>
  <div >
  <form action="/admin/editpost/{{$item->id}}" method="post">
    @csrf
    <button class="btn btn-warning">Edit</button>
  </form>
  <form action="/admin/deletepost/{{$item->id}}" method="post">
    @csrf
    <button class="btn btn-danger">Delete</button>
  </form>
</div>
</div>  

<p>{{$item->preview}}</p>
<p>{{$item->text}}</p>

@foreach ($comments as $comment)

<ul class="comment-list">
    <li>
        
        <div class="avatar">
            <img width="50px" src="{{'/'.$comment->user->image}}" alt="">
        </div>
        <div class="commetn-text">
            <h3>{{$comment->user->fname}} {{$comment->user->name}} |
                {{$comment->created_at->format('d M H:i')}} | Reply</h3>
            <p>{{$comment->comment}}</p>

        </div>
    </li>
    </ul>
  <form action="/admin/deletecomment/{{$comment->id}}" method="post">
    @csrf
    <button class="btn btn-danger">Delete</button>
  </form>
  <br>
@endforeach
@stop