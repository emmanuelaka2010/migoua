<?php

namespace App\Http\Controllers;

use Session;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
        // public function __construct()
        // {
        //     $this->middleware(['auth', 'verified']);
        // }

    public function index()
    {
        $products = DB::table('wishlists')
                        ->leftJoin('products', 'wishlists.product_id', '=', 'products.id')
                        ->get();
        return view('wishlist', compact('products'));
    }

    public function addWishlist(Request $request)
    {
        $title = 'Produit';
        $categories = Categories::all();
        $wishlist = new Wishlist();
        $wishlist->user_id = Auth::user()->id;
        $wishlist->product_id = $request->product_id;
        $wishlist->save();
        
        
        $wishlistProd = DB::table('products')->where('id', $request->product_id);
        return view('product', compact('wishlistProd', 'title', 'categories'));
        // return view('product', );
    }

}

