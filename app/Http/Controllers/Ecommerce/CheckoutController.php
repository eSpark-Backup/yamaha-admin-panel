<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (app('auth')->user()->cart->products_count === 0) {
            return \redirect()->route('ecommerce.cart');
        }

        $cart = app('auth')->user()->cart;


        $cart->load('products', 'products.manufacturer', 'products.model');

        return Inertia::render('Ecommerce/Checkout', [
            'title' => "Checkout",
            'cart' => $cart
        ]);
    }
}
