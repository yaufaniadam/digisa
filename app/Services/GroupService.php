<?php

namespace App\Services;

use App\Models\Group;
use App\Traits\FileUpload;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class GroupService
{
    use FileUpload;

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
        // dd($request->all());
        DB::transaction(function () use ($request) {
            $data = Arr::except($request->validated(), ['thumbnail']);
            $group = Group::create($data);
            $thumbnailPath = "groups/{$group->id}/thumbnail/";
            $uploadedThumbnail = self::upload($request->validated('thumbnail'), $thumbnailPath);
            $group->update([
                'thumbnail' => $uploadedThumbnail
            ]);
        });
    }
    public static function fetch()
    {
        return static::$group;
    }
}
