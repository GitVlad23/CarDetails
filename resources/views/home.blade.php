@extends('layouts.head')

@section('body')

<h1>Hello World!</h1>


<a href="{{ route('post.index') }}">Товары</a><br><br>

@guest('web')
    <form method="GET" action="{{ route('login.form') }}">
        <button type="submit" class="btn btn-danger">Войти</button>
    </form>

    <form method="GET" action="{{ route('register.form') }}">
        <button type="submit" class="btn btn-danger">Зарегистрироваться</button>
    </form>
@endguest

@auth('web')
    <h3>Приветствую, {{ auth()->user()->name; }}!</h3>

    <form method="GET" action="{{ route('logout') }}">
        <button type="submit" class="btn btn-danger">Выйти</button>
    </form><br><br>

    <form method="GET" action="{{ route('product.create') }}">
        <button>Добавить продукт</button>
    </form><br>

    <form method="GET" action="{{ route('post.create') }}">
        <button>Создать лот</button>
    </form><br>

    <a href="{{ route('person.products') }}">Мои товары</a>
@endauth

@endsection