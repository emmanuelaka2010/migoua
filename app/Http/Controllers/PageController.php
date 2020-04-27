<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\DB;
use Session;

class PageController extends Controller
{
    
    public function index() {

        // Toutes les catégories
        $categories = Categories::all();
        // Les produits les moins couteux
        // Les fruits
        $fruit_min = Product::where("id_sub_category", 3)
                            ->orderBy("prix", "asc")
                            ->limit(5)
                            ->get();
    
        // Les légumes;
        $legume_min = Product::where("id_sub_category", 4)
                            ->orderBy("prix", "asc")
                            ->limit(5)
                            ->get();
        $viande_min = DB::table("categories")
                        ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                        ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                        ->where('categories.id', 4)
                        ->orderBy("products.prix", "asc")
                        ->limit(5)
                        ->get();
        // Affichage de quelques produits dans la page d'acueuil
        // Les fruits
        $fruit = DB::table("categories")
                        ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                        ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                        ->where('categories.id', 2)
                        ->take(4)
                        ->get();

        $legume = DB::table("categories")
                        ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                        ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                        ->where('categories.id', 3)
                        ->take(4)
                        ->get();
        $volaille = Product::where("id_sub_category", 1)
                            ->limit(4)
                            ->get();
        // dd($volaille);
        return view('index', compact('categories', 'fruit_min', 'legume_min', 'viande_min', 'fruit', 'legume', 'volaille'));
    }

    public function category() {
        // Le titre de la page
        $title = 'Categories';
        // Le nom de la catégorie
        $name = $_GET['name'];
        // Réquête pour récupérer toutes les catégories dans la BD
        $categories = Categories::all();
        // Réquête pour récupérer tous les produits de cette catégorie dans la BD
        $products = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                ->where('categories.name', $name)
                ->get();
        // echo $name;
        return view('category', compact('name', 'products', 'categories', 'title'));
    }

    public function product() {
        // Le titre de la page
        $title = 'Produit';
        // Réquête pour récuperer tous les catégories
        $categories = Categories::all();
        // L'id du produit selectionné
        $id = $_GET['num'];

        // Réquête pour selectionner le produit dans la BD à partir de son id.
        $product = Product::where('id', $id)->get();
        $product = $product[0];
        // dd($product->status);
        // Réquête pour récuperer la catégorie du produit selectionné
        // $category_prod = DB::table('categories')
        //                     ->select('categories.name')
        //                     ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
        //                     ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
        //                     ->where('products.id', $id)
        //                     ->get();
        $category_prod = $_GET['cat'];
        return view('product', compact('product', 'categories', 'category_prod', 'title'));
    }

    public function wishlist(){
        return view('wishlist');
    }
}
