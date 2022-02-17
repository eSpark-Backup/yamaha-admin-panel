<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class CartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cart = $this->getCart($request);

        switch ($request->action) {
            case "addToCart":
                $this->addProductToCart($cart, $request);
                break;

            case "removeFromCart":
                $this->removeProductFromCart($cart, $request);
                break;
        }


        $cart->load('products', 'products.model', 'products.manufacturer');

        return Inertia::render('Ecommerce/Cart', [
            'title' => "Cart",
            'cart' => $cart
        ]);
    }


    protected function getCart()
    {
        return \app('auth')->user()->cart()->updateOrCreate([], [
            'uuid' => Str::uuid(),
            'ip_address' => \request()->ip()
        ]);
    }


    protected function addProductToCart(Cart $cart, Request $request)
    {
        if ($request->has('action') && $request->has('pid')) {
            $cart->products()->sync([$request->pid], false);
        }
    }


    protected function removeProductFromCart(Cart $cart, Request $request)
    {
        if ($request->has('action') && $request->has('pid')) {
            $cart->products()->detach($request->pid);
        }
    }
}
