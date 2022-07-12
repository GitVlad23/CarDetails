@extends('layouts.head')

@section('body')

<h1>Hello Posts!</h1>

<br><br>

@foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <h3>{{$post->description}}</h3>
    <h3>{{$post->price}}</h3>
@endforeach 

@endsection