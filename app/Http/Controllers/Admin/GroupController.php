<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Services\GroupService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GroupController extends Controller
{
    public function getGroupByName(Request $request)
    {
        $groups = GroupService::groupByName($request);

        return Response::json($groups);
    }

    public function create()
    {
        return view('admin.pages.group.create');
    }

    public function store(StoreGroupRequest $request)
    {
        GroupService::create($request);

        return redirect()->back()->with('success', 'Grup baru ditambahkan.');
    }
}
