<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function posts()
    {
        $posts = Post::get();

        return view('posts', compact('posts'));
    }
}
