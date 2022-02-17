<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    protected $cart;

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $this->cart = \tap($this->getCart($request), function ($cart) use ($request) {



            $this->addProductToCart($cart, $request);

            $this->removeProductFromCart($cart, $request);
        });

        if (\request('action') === 'addToCart') {
            return \back()->with('success', ['add_to_cart_success' => true]);
        }

        if (\request('action') === 'removeFromCart') {
            return \back()->with('success', ['removed_from_cart' => true]);
        }

        return Inertia::render('Web/Cart', [
            'cart'=> $this->cart
        ]);
    }


    protected function addProductToCart(Cart $cart, Request $request)
    {
        if ($request->has('action') && \in_array($request->action, ['buyNow', 'addToCart']) && $request->has('pid')) {

            $cart->series()->sync([$request->pid], false);
        }
    }


    protected function removeProductFromCart(Cart $cart, Request $request)
    {
        if ($request->has('action') && $request->action === 'removeFromCart' && $request->has('pid')) {
            $cart->series()->detach($request->pid);
        }
    }

    /**
     * Get active cart.
     * 
     * @return \App\Models\Cart 
     * @throws \Illuminate\Contracts\Container\BindingResolutionException 
     */
    protected function getCart($request)
    {
        if (!$request->user()) {

            $guestCart = Cart::guest()->first();

            if ($guestCart === null) {

                return Cart::create(['uuid' => Str::uuid(), 'ip_address' => $request->ip()]);
            }

            return $guestCart;
        }

        return $request->user()->cart;
    }
}
