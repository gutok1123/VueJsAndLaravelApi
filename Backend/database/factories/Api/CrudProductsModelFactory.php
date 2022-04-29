<?php

namespace Database\Factories\Api;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CrudProductsModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_product' => $this->faker->name(),
            'brand' => $this->faker->name(),
            'voltage' =>$this->faker->name(),
            'description' => $this->faker->name(), 
        ];
    }
}
