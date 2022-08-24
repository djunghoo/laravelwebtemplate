<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

// เรียกใช้งาน Model Employee
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Product::class;

    public function definition()
    {
        $pd=['monitor','mouse','keyboard','memory','cpu','mainbaord','case','ups','powersupply'];
            return [
                'name' => $this->faker->randomElement($pd),
                'slug' => $this->faker->name(),
                'description' => $this->faker->paragraphs(2),
                'price' => $this->faker->randomFloat(2,1000000, 9999999),
                'image' => $this->faker->imageUrl(400,300)
            ];
    }
}