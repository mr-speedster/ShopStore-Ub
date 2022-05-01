<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function Home()
    {
        $product = Product::all();
        return view('home',['products'=>$product]);
    }

    public function Product()
    {
        $product = Product::all();
        return view('product',['products'=>$product]);
    }

    public function About()
    {
        return view('about');
    }

    public function Blog()
    {
        return view('blog');
    }

    public function Contact()
    {
        return view('contact');
    }
}
