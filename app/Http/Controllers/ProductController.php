<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    // for users
    public function product($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('catalog.product', ['categories'=>$categories, 'product'=>$product]);
    }
    
    public function create(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('catalog.product.create', ['categories'=>$categories, 'brands'=>$brands]);
    }

    public function store(Request $request){
        $product = new Product;
        $product->name = $request["name"];
        $product->slug = $request["slug"];
        $product->category_id = $request["category_id"];
        $product->brand_id = $request["brand_id"];
        $product->price = $request["price"];
        $product->content = $request["content"];
        $product->image = $request["image"];
        $product->save();
        $product->id;
        return redirect()->to('catalog/products/update/'.$product->id);
    }

    //for admins'
    public function show($id){
        $brands = Brand::all();
        $categories = Category::all();
        $product = Product::find($id);
        return view('catalog.product.show', ['categories'=>$categories, 'brands'=>$brands, 'product'=>$product]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request["name"];
        $product->slug = $request["slug"];
        $product->category_id = $request["category_id"];
        $product->brand_id = $request["brand_id"];
        $product->price = $request["price"];
        $product->content = $request["content"];
        $product->image = $request["image"];
        if($request["action"]=='delete'){
            $product->delete();
            return redirect('/');
        }else{
            $product->save();
            return redirect()->to('/');
        }
    }
    
    public function list(){
        $products = Product::all();
        $categories = Category::all();
        return view('catalog.product.list', ['categories'=>$categories, 'products'=>$products]);
    }
}
