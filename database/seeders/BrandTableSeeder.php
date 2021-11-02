<?php
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder {
    public function run() {
        // создать 4 бренда
        \App\Models\Brand::factory()->count(4)->create();
    }
}
