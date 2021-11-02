<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller {
    public function __invoke(Request $request) {
        $categories = Category::all();
        $brands = Brand::all();
        return view('site.index', ['categories'=>$categories], ['brand'=>$brands]);
    }
}
