<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function productThumbnail(Request $request)
    {
        $validated = $request->validate([
            'path' => 'string'
        ]);

        if (empty($validated['path'])) {
            abort(404);
        }


        $filePath = Crypt::decryptString($validated['path']);

        if (Storage::exists($filePath)) {
            $content = Storage::get($filePath);
            if ($content != null) {
                $mime = Storage::mimeType($content);
                $response = Response::make($content, 200);
                $response->header("Content-Type", $mime);
                return $response;
            }
            abort(404);
        } else {
            abort(404);
        }
    }

    public function download($transactionItemId)
    {
        $userId = Auth::user()->id;

        $transaction = Transaction::where('user_id', $userId)
            ->where('id', $transactionItemId)
            ->first();

        if ($transaction->user_id != $userId) {
            abort(403);
        }

        if ($transaction && $transaction->status == 'lunas') {
            $filePath = TransactionItem::find($transactionItemId)->file;
            if (!Storage::exists($filePath)) {
                abort(404);
            }
            return response()->download(Storage::path($filePath));
        } else {
            abort(403);
        }
    }
}
