<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productSuffixes = ['Sweater', 'Pants', 'Shirt', 'Hat', 'Socks'];
        $name = $this->faker->company . ' ' . Arr::random($productSuffixes);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(320),
            'price' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
