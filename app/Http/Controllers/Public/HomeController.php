<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->limit(8)->get();
        $categories = Category::all();
        return view('public.pages.home')
            ->with(compact('products', 'categories'));
    }
    public function katalog()
    {
        $categories = Category::all();
        return view('public.pages.katalog')
            ->with(compact('categories'));
    }
    public function tentang()
    {
        return view('public.pages.tentang');
    }
}
