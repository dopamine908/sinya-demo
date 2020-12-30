<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'brand' => $this->faker->randomElement(['Acer', 'Apple', 'Asus', 'Dell']),
            'title' => $this->faker->word . '-' . $this->faker->numberBetween($min = 1000, $max = 9999),
            'original_price' => $this->faker->numberBetween($min = 30000, $max = 50000),
            'discount_price' => $this->faker->numberBetween($min = 10000, $max = 29999),
        ];
    }
}
