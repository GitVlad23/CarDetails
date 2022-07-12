<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function products()
    {
        $products = Product::get()->where('user_id', auth()->user()->id);

        return view('person/products', compact('products'));
    }
}
