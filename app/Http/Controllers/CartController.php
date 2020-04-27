<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use App\Categories;
use Illuminate\Http\Request;
use Session;
// use response;

class CartController extends Controller
{
    public function add_to_cart()
    {
        $id = request()->product_id;
        $qty = request()->num;
        $product = Product::find($id);

        $cart = Cart::add($product->id, $product->name, $qty, $product->prix)
                    ->associate($product);
        // dd($cart);
        Session::flash('message', 'Le produit a été ajouté à votre panier avec success');
        return back();
        // return redirect()->route('cart');
        // return response()->json($cart);
        
    }

    public function cart()
    {
        $categories = Categories::all();
        return view('cartpage', compact('categories'));
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
