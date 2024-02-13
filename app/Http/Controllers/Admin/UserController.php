<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\VerifyUserRequest;
use App\Mail\RegistrationAccepted;
use App\Models\User;
use App\Models\UserStatus;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', '=', 2)->get();

        return view('admin.pages.user.index')
            ->with(compact('users'));
    }
    public function show($userId)
    {
        $user = UserService::userDetail($userId)->fetch();
        $statuses = UserStatus::where('id', '!=', $user->status_id)->get();
        return view('admin.pages.user.edit')
            ->with(compact('user', 'statuses'));
    }

    public function update(UpdateUserRequest $request, $userId)
    {
        UserService::userDetail($userId)->update($request);
        return redirect()->to(route('admin.user_detail', $userId))->with('success', 'Status pengguna berhasil diubah.');
    }

    public function verify(VerifyUserRequest $request, $userId)
    {
        $user = UserService::userDetail($userId)->verify($request);

        if ($request->status_id == 1) {
            Mail::to($user->email)->send(new RegistrationAccepted($user));
        }

        return redirect()->to(route('admin.user_detail', $userId))->with('success', 'Status pengguna berhasil diubah.');
    }
}
