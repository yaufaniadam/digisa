<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = TransactionService::transactionIndex();
        // dd($transactions);
        return view('admin.pages.transaction.index')
            ->with(compact('transactions'));
    }

    public function show($id)
    {
        $transaction = TransactionService::transactionDetail($id)->fetch();

        return view('admin.pages.transaction.detail')
            ->with(compact('transaction'));
    }

    public function completeTransaction($id)
    {
        TransactionService::transactionDetail($id)->confirmTransactionPayment();

        return redirect()->back()->with('success', 'Pembayaran telah dikonfirmasi.');
    }
}
