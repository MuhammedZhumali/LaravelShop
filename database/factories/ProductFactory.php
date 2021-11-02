<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>$this->faker->numberBetween(1, 4),
            'brand_id'=>$this->faker->numberBetween(1,4),
            'name' => $this->faker->name,
            'content' => $this->faker->realText(180),
            'price' => $this->faker->numberBetween(50, 100),
            'slug' => $this->faker->realText(rand(10,15)),
        ];
    }
}
