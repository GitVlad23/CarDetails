<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Person\PersonController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Product\ProductController;


// Home
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/posts', [MainController::class, 'posts'])->name('posts');

// Auth
Route::get('/auth/register', [AuthController::class, 'register_form'])->name('register.form');
Route::post('/auth/register', [AuthController::class, 'register_process'])->name('register.process');

Route::get('/auth/login', [AuthController::class, 'login_form'])->name('login.form');
Route::post('/auth/login', [AuthController::class, 'login_process'])->name('login.process');

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

// Person
Route::get('/person/products', [PersonController::class, 'products'])->name('person.products');

// Post
Route::resource('post', PostController::class);

// Product
Route::resource('product', ProductController::class);