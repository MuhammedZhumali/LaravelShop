<?php

use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [IndexController::class, '__invoke'])->name('index');

Route::get('/catalog/index', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/category/{slug}', [CatalogController::class, 'category'])->name('catalog.category');
Route::get('/catalog/brand/{slug}',[CatalogController::class, 'brand'])->name('catalog.brand');
Route::get('/catalog/product/{slug}', [ProductController::class, 'product'])->name('catalog.product');

//product
Route::get('/catalog/products/addNew', [ProductController::class, 'create']);
Route::post('/catalog/products/addNew', [ProductController::class, 'store']);
Route::get('/catalog/products/update/{id}', [ProductController::class, 'show']);
Route::post('/catalog/products/update/{id}', [ProductController::class, 'update']);
Route::get('/catalog/products/list', [ProductController::class, 'list']);

//category
Route::get('/catalog/categories/addNew', [CatalogController::class, 'createCategory']);
Route::post('/catalog/categories/addNew', [CatalogController::class, 'storeCategory']);
Route::get('/catalog/categories/update/{id}', [CatalogController::class, 'showCategory']);
Route::post('/catalog/categories/update/{id}', [CatalogController::class, 'updateCategory']);
Route::get('/catalog/categories/list', [CatalogController::class, 'listCategory']);

//brand
Route::get('/catalog/brands/addNew', [CatalogController::class, 'createBrand']);
Route::post('/catalog/brands/addNew', [CatalogController::class, 'storeBrand']);
Route::get('/catalog/brands/update/{id}', [CatalogController::class, 'showBrand']);
Route::post('/catalog/brands/update/{id}', [CatalogController::class, 'updateBrand']);
Route::get('/catalog/brands/list', [CatalogController::class, 'listBrand']);

//seller
Route::get('/seller/index', function(){ return view('seller.index');});


//basket
Route::get('/basket/index', [BasketController::class, 'index'])->name('basket.index');
Route::get('/basket/checkout', [BasketController::class, 'checkout'])->name('basket.checkout');
Route::post('/basket/add/{id}', [BasketController::class, 'add'])
    ->where('id', '[0-9]+')
    ->name('basket.add');
Route::post('/basket/clear', [BasketController::class, 'clear'])->name('basket.clear');
