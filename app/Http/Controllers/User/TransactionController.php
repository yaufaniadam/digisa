<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Services\CartService;
use App\Services\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function checkout()
    {
        $userId = 1;
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
        $userId = 1;
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
