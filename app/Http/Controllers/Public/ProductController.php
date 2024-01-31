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

        if ($product->group) {
            return view('public.pages.product.grouped')
                ->with(compact('product'));
        }


        return view('public.pages.product.detail')
            ->with(compact('product'));
    }
}
