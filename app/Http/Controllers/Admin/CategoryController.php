<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function getCategoryByName(Request $request)
    {
        $categories = CategoryService::categoryByName($request);

        return Response::json($categories);
    }

    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        CategoryService::create($request);
        return redirect()->back()->with('success', 'Kategori baru ditambahkan');
    }
}
