<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    public static $category;
    public static function categoryByName($request)
    {
        return Category::when($request->has('q'), function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->q . '%');
        })
            ->limit(10)
            ->get();
    }
    public static function create($request)
    {
        DB::transaction(function () use ($request) {
            Category::create($request->validated());
        });
    }
    public static function fetch()
    {
        return static::$category;
    }
}
