<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PaymentAccepted;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $transaction = TransactionService::transactionDetail($id)->confirmTransactionPayment();

        Mail::to($transaction->user->email)->send(new PaymentAccepted($transaction));

        return redirect()->back()->with('success', 'Pembayaran telah dikonfirmasi.');
    }
}
