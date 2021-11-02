<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    /**
     * Возвращает список товаров выбранной категории
     */
    public function getProducts() {
        return Product::where('brand_id', $this->id)->get();
    }
    /**
     * Связь «один ко многим» таблицы `brands` с таблицей `products`
     */
    public function products() {
        return $this->hasMany(Product::class);
    }
    /**
     * Возвращает список популярных брендов каталога товаров.
     * получаем 5 брендов с наибольшим кол-вом товаров
     */
    public static function popular() {
        return self::withCount('products')->orderByDesc('products_count')->limit(1)->get();
    }
}
