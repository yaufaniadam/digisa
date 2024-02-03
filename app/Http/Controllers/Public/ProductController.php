<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = ProductService::productList($request);
        if ($products->count() == 0) {
            abort(404);
        }
        $categories = Category::all();

        return view('public.pages.product.index')
            ->with(compact('products', 'categories'));
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
