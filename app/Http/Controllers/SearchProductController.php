<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProductController extends Controller
{
    public function search(Request $request) {

        $categories = Categories::all();
        // dd($_GET['cate_search']);
        $search = $request->input('s');
        $category_name = $_GET['cate_search'];
        // dd($search);
        
        // dd($products);

        if (isset($category_name) and isset($search)) {
            if ($category_name == 'Toutes les catégories') {
                $products = Product::where('name','like', "%$search%")->get();
            }
            else {
                $category_id = Categories::where('name', $category_name)->get('id');
                // $products = Product::where('name','like', "%$search%")
                //                     ->where()
                
                $products = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                ->where('categories.name', $category_name)
                ->where('products.name', 'like', "%$search%")
                ->get();
                // dd($products);
            }
            
            // dd($category_id);
        }
        return view('search', compact('products', 'categories'));
    }
}
