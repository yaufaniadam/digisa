<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserService
{
    public static $user;
    public static function userDetail($userId)
    {
        User::find($userId);
        static::$user = User::find($userId);
        return new static;
    }

    public function verify($request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $user = static::$user;
            $user->update([
                'status_id' => $validated['status_id']
            ]);
        });
    }

    public function update($request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $user = static::$user;
            $user->update($validated);
        });
    }

    public static function fetch()
    {
        return static::$user;
    }
}
