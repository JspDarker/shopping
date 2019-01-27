<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(5)->get();
        return view('shop.index' , compact('products'));
    }
}
