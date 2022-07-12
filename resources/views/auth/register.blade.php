@extends('layouts.head')

@section('body')

<h1>Register</h1>

<form method="POST" action="{{ route('register.process') }}">
    @csrf

    <input type="text" id="name" name="name" placeholder="Введите имя"/><br>
    <input type="text" id="email" name="email" placeholder="Введите Email"/><br>
    <input type="password" id="password" name="password" placeholder="Введите пароль"/><br>
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Подтвердите пароль"/><br><br>

    <button type="submit" class="btn btn-success">Зарегистрироваться</button>
</form>

@endsection