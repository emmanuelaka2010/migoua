<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\DB;

class PageController extends Controller
{
    public function index() {

        $category = Categories::all();
        // dd($category);
        return view('index')->with('categories', $category);
    }

    public function category() {
        $name = $_GET['name'];
        $categories = Categories::all();
        $products = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                ->where('categories.name', $name)
                ->get();
        // echo $name;
        return view('category', compact('name', 'products', 'categories'));
    }

    public function product() {
        $id = $_GET['num'];
        $categories = Categories::all();
        $product = Product::where('id', $id)->get();
        $product = $product[0];
        return view('product', compact('product', 'categories'));
    }
}
