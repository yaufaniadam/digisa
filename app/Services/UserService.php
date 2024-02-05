<?php

namespace App\Services;

use App\Models\RegistrationPurpose;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UserService
{
    public static $user;
    public static function userDetail($userId)
    {
        User::find($userId);
        static::$user = User::with('registrationPurpose')
            ->find($userId);
        return new static;
    }

    public static function verify($request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $user = static::$user;
            $user->update([
                'status_id' => $validated['status_id']
            ]);
        });
    }

    public static function update($request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $user = static::$user;
            $user->update($validated);
        });
    }

    public static function registerNewUser($request)
    {
        DB::transaction(function () use ($request) {
            $user = User::create($request->validated());
            RegistrationPurpose::create([
                'user_id' => $user->id,
                'purposes' => $request->validated()['purposes']
            ]);
        });
    }

    public static function fetch()
    {
        return static::$user;
    }
}
