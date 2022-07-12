@extends('layouts.head')

@section('body')

<h1>Login</h1>

<form method="POST" action="{{ route('login.process') }}">
    @csrf

    <input type="text" id="email" name="email" placeholder="Введите Email"/><br>
    <input type="password" id="password" name="password" placeholder="Введите пароль"/><br><br>

    <button type="submit" class="btn btn-success">Авторизоваться</button>
</form>

@endsection