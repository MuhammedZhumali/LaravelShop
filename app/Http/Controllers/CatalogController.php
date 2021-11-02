<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller {
    public function index() {
        $roots = Category::where('parent_id', 0)->get();
        return view('catalog.index', compact('roots'));
    }
    //Category
    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::all();
        return view('catalog.category', ['products'=>$products, 'category'=>$category]);
    }
    public function createCategory(){
        $categories = Category::all();
        $products = Product::all();
        return view('catalog.category.create', ['products'=>$products, 'categories'=>$categories]);
    }
    
    public function storeCategory(Request $request){
        $category = new Category();
        $category->name = $request["name"];
        $category->slug = $request["slug"];
        $category->content = $request["content"];
        $category->image = $request["image"];
        $category->save();
        $category->id;
        return redirect()->to('catalog/categories/update/'.$category->id);
    }
    public function showCategory($id){
        $products = Product::all();
        $cat = Category::findOrFail($id);
        $categories = Category::all();
        return view('catalog.category.show', ['cat'=>$cat, 'categories'=>$categories, 'products'=>$products]);
    }
    public function updateCategory(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request["name"];
        $category->slug = $request["slug"];
        $category->content = $request["content"];
        $category->image = $request["image"];
        if($request["action"]=='delete'){
            $category->delete();
            return redirect('/');
        }else{
            $category->save();
            return redirect()->to('/');
        }
    }
    public function listCategory(){
        $products = Product::all();
        $categories = Category::all();
        return view('catalog.category.list', ['categories'=>$categories, 'products'=>$products]);
    }
    //Category end

    //Brand
    public function brand($slug) {
        $brand = Brand::where('slug', $slug)->firstOrFail();
        $products = Product::all();
        $categories=Category::all();
        return view('catalog.brand', ['brand'=>$brand,'products'=>$products, 'categories'=>$categories]);
    }

    public function createBrand(){
        $brands = Brand::all();
        $products = Product::all();
        $categories=Category::all();
        return view('catalog.brand.create', ['products'=>$products, 'brands'=>$brands, 'categories'=>$categories]);
    }
    
    public function storeBrand(Request $request){
        $brand = new Brand();
        $brand->name = $request["name"];
        $brand->slug = $request["slug"];
        $brand->content = $request["content"];
        $brand->image = $request["image"];
        $brand->save();
        $brand->id;
        return redirect()->to('catalog/brands/update/'.$brand->id);
    }
    public function showBrand($id){
        $products = Product::all();
        $brand = Brand::find($id);
        $categories=Category::all();
        return view('catalog.brand.show', ['products'=>$products, 'brand'=>$brand, 'categories'=>$categories]);
    }
    public function updateBrand(Request $request, $id){
        $brand = Brand::find($id);
        $brand->name = $request["name"];
        $brand->slug = $request["slug"];
        $brand->content = $request["content"];
        $brand->image = $request["image"];
        if($request["action"]=='delete'){
            $brand->delete();
            return redirect('/');
        }else{
            $brand->save();
            return redirect()->to('/');
        }
    }
    public function listBrand(){
        $products = Product::all();
        $brands = Brand::all();
        $categories=Category::all();
        return view('catalog.brand.list', ['brands'=>$brands, 'products'=>$products, 'categories'=>$categories]);
    }
    //Brand end
}
