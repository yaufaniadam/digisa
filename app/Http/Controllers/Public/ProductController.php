<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
    }

    public function show($id)
    {
        $product = ProductService::productDetail($id)->fetch();

        return view('public.pages.product.detail')
            ->with(compact('product'));
    }
}
