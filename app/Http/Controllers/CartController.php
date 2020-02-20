<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function add_to_cart()
    {
        $product = Product::find(request()->product_id);

        $cart = Cart::add($product->id, $product->name, request()->num, $product->prix)
                    ->associate($product);
        // dd($cart);
        return redirect()->route('cart');
        
    }

    public function cart()
    {
        // Cart::destroy();
        return view('cartpage');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
