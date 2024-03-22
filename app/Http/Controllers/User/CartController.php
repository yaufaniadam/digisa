<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $cart = CartService::cartIndex($userId);
        return view('user.pages.cart.index')
            ->with(compact('cart'));
    }

    public function addToCart($productId)
    {
        $userId = Auth::user()->id;
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
