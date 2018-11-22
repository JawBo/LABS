@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="text-center">Blog Posts</h1>
@stop

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Created_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articles as $item)
    <tr>
          
    <th scope="row">{{$item->id}}</th>
    <td>{{$item->name}}</td>
    <td>{{$item->user->fname}} {{$item->user->name}}</td>
    <td>{{$item->created_at}}</td>
    <td><button class="btn btn-success">Validate</button></td>
    <td>
    <form action="/admin/editpost/{{$item->id}}" method="get">
      <button class="btn btn-warning">Edit</button>
    </form>
    </td>
    <td><button class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@stop