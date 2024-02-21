<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.pages.category.index')
            ->with(compact('categories'));
    }

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



    public function show($id)
    {
        $category = CategoryService::categoryDetail($id)->fetch();
        return view('admin.pages.category.detail')
            ->with(compact('category'));
    }

    public function update(StoreCategoryRequest $request, $id)
    {
        CategoryService::categoryDetail($id)->updateCategory($request);
        return redirect()->back()->with('success', 'Kategori berhasil diperbarui');
    }
}
