<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;

//Вместо того, чтобы вручную указывать значение каждого столбца при создании этих тестовых данных,
//Laravel позволяет вам определять набор атрибутов по умолчанию для каждой из ваших моделей Eloquent, используя фабрики моделей.
class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'content' => $this->faker->realText(rand(150,200)),
            'slug' => $this->faker->realText(rand(10,15)),
        ];
    }
}
