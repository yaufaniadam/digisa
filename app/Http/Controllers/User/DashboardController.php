<?php

namespace App\Http\Controllers\User;

use user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\TransactionService;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function index()
    {      
        $userId = Auth::user()->id;
        $transactions = TransactionService::userTransactions($userId);
        return view('user.pages.dashboard.index')
            ->with(compact('transactions'));
    }
}
