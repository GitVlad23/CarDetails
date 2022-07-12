@extends('layouts.head')

@section('body')

<h1>Ваши товары</h1>

<br><br>

@foreach($products as $product)
    <h2>{{$product->name}}</h2>
    <h3>{{$product->description}}</h3>
    <h3>{{$product->price}}</h3><br>
@endforeach 

@endsection