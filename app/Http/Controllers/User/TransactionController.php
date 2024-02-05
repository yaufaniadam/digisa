<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Services\CartService;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $transactions = TransactionService::userTransactions($userId);
        return view('user.pages.transaction.index')
            ->with(compact('transactions'));
    }
    public function checkout()
    {
        $userId = Auth::user()->id;
        $order = CartService::cartIndex($userId);

        if ($order['cartItems'] == null) {
            return redirect()->back()->with('warning', 'Keranjang anda masih kosong.');
        }
        // dd($order);

        return view('user.pages.transaction.checkout')
            ->with(compact('order'));

        // dd($order);
    }

    public function placeOrder(StoreTransactionRequest $request)
    {
        $userId = Auth::user()->id;
        $order = CartService::cartIndex($userId);

        if ($order['cartItems'] == null) {
            return redirect()->back()->with('warning', 'Keranjang anda masih kosong.');
        }

        $transaction = TransactionService::createTransaction($userId, $request, $order);
        return redirect()->route('user.transaction_detail', $transaction->id);
    }

    public function show($id)
    {
        $transaction = TransactionService::transactionDetail($id)->fetch();

        return view('user.pages.transaction.detail')
            ->with(compact('transaction'));
    }
}
