<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketProductTable extends Migration
{
    public function up() {
        Schema::create('basket_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('basket_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedTinyInteger('quantity');

            $table->foreign('basket_id')
                ->references('id')
                ->on('baskets')
                ->cascadeOnDelete();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();
        });
    }

    public function down() {
        Schema::dropIfExists('basket_product');
    }
}
