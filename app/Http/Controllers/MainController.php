<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Typology;

class MainController extends Controller
{
    public function home(){
        $products = Product::all();
        $categories = Category::all();
        $typologies = Typology::all();
        return view('pages.home', compact(['categories', 'products', 'typologies']));
    }

    public function productFirst(){
        $products = Product::all();
        $categories = Category::all();
        $typologies = Typology::all();
        return view('pages.product', compact(['categories', 'products', 'typologies']));
    }

    public function createProduct(){
        $products = Product::all();
        $categories = Category::all();
        $typologies = Typology::all();
        return view('pages.create', compact(['categories', 'products', 'typologies']));
    }

    public function storeProduct(Request $request){
        
    }
}
