<?php
use Illuminate\Database\Seeder;


class CategoryTableSeeder extends Seeder {
    public function run() {
        // создать 4 категории
        \App\Models\Category::factory()->count(4)->create();
    }
}