<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //cart
    public function cart()
    {
        return view('cart.cart');
    }

    // про список желаний
    public function wishlist()
    {
        return view('cart.wishlist');
    }
}
