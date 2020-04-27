<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WishlistController extends Controller
{
        // public function __construct()
        // {
        //     $this->middleware(['auth', 'verified']);
        // }

    public function index(Request $request){
        $value = $request->session()->all();
        // $value = $request->session()->get('_previous.url');
        // $request->session()->put('wishlit', ['default' => ['Illuminate\Support\Collection' => 'item']]);
        // $request->session()->pull('essai');
        dd($value);
        return view('wishlist');
    }

    // public function show(Request $request, $id){
    //     $value = $request->session()->get('key', 'default');
    //     dd($value);
    //     return view('wishlist');
    // }
}

