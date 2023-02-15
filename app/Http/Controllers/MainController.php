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
        $data = $request->validate([
            'name' => 'required|string|max:64',
            'description' => 'string|max:200',
            'price' => 'required|integer',
            'weight' => 'integer',
            'typology_id' => 'required|integer',
            'categories' => 'required|array'
        ]);

        $data['code'] = rand(10000000, 99999999);
        $product = Product::make($data);

        $typology = Typology::find($data['typology_id']);
        $product->typology()->associate($typology);

        $product->save();

        $categories = Category::find($data['categories']);
        $product->categories()->attach($categories);

        return redirect()->route('home');
    }

    public function deleteProduct(Product $product){
        $product->categories()->sync([]);
        $product->delete();
        return redirect()->route('product.home');
    }
}
