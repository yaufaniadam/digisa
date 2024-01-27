<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;

class CartService
{
    public static function cartIndex($userId)
    {
        $cartQ = Cart::with(['cartItems', 'cartItems.product'])
            ->where('user_id', $userId)
            ->first();

        if ($cartQ != null) {
            $cartItems = $cartQ->cartItems;

            $prices = [];
            foreach ($cartItems as $cartItem) {
                $prices[] = $cartItem->product->price;
            }

            $subTotal = array_sum($prices);

            $total = $subTotal;

            $data = [
                'cartItems' => $cartItems,
                'subTotal' => $subTotal,
                'total' => $total
            ];

            return $data;
        }

        $data = [
            'cartItems' => null,
            'subTotal' => 0,
            'total' => 0
        ];

        return $data;
    }
    public static function addProductToCart($userId, $productId)
    {
        $cart = Cart::where('user_id', $userId)->first();

        if ($cart == null) {
            $cart = DB::transaction(function () use ($userId) {
                return  Cart::create([
                    'user_id' => $userId,
                ]);
            });
        }

        $cartItem = CartItem::where([
            ['cart_id', '=', $cart->id],
            ['product_id', '=', $productId]
        ])->first();

        if ($cartItem == null) {
            DB::transaction(function () use ($productId, $cart) {
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $productId,
                ]);
            });
        } else {
            return 'exists';
        }
    }
}
