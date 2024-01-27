<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function removeFromCart($id)
    {
        CartItem::destroy($id);

        return redirect()->back()->with('success', 'Barang berhasil di hapus dari keranjang.');
    }
}
