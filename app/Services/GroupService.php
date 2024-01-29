<?php

namespace App\Services;

use App\Models\Group;
use Illuminate\Support\Facades\DB;

class GroupService
{
    public static $group;
    public static function groupByName($request)
    {
        return Group::when($request->has('q'), function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->q . '%');
        })
            ->limit(10)
            ->get();
    }
    public static function create($request)
    {
        DB::transaction(function () use ($request) {
            Group::create($request->validated());
        });
    }
    public static function fetch()
    {
        return static::$group;
    }
}
