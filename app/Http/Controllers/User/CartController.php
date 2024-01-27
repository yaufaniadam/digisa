<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = CartService::cartIndex(1);
        return view('user.pages.cart.index')
            ->with(compact('cart'));
    }

    public function addToCart($productId)
    {
        $userId = 1;
        $cartItem = CartService::addProductToCart($userId, $productId);

        if ($cartItem == 'exists') {
            return redirect()
                ->back()
                ->with('warning', 'Barang yang anda inginkan sudah ada di keranjang.');
        }

        return redirect()
            ->to(route('user.cart'))
            ->with('success', 'Barang berhasil ditambahkan ke keranjang.');
    }
}
