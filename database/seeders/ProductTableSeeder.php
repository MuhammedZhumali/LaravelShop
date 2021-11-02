<?php
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder {
    public function run() {
        // создать 12 товаров
        \App\Models\Product::factory()->count(12)->create();
    }
}