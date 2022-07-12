@extends('layouts.head')

@section('body')


@isset($products)

<h1>Добавить новый продукт</h1>

<form method="POST" action="{{ route('product.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Введите название"><br>
    <input type="text" name="description" placeholder="Введите описание"><br>
    <input type="text" name="price" placeholder="Введите цену"><br>
    <input type="text" name="code" placeholder="Введите код товара"><br><br>

    <button type="submit" class="btn btn-success">Опубликовать</button>
</form>

@else

<h1>Создать новый лот</h1>

<form method="POST" action="{{ route('post.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Введите заголовок"><br>
    <input type="text" name="description" placeholder="Введите описание"><br>
    <input type="text" name="price" placeholder="Введите цену"><br>
    <input type="text" name="product_id" placeholder="Выбор товара"><br><br>

    <button type="submit" class="btn btn-success">Опубликовать</button>
</form>

@endisset


@endsection