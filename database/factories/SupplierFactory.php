<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'name' => $this->faker->name,
            'mobile'=> $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'details' => $this->faker->streetName,
            'previous_balance'=> $this->faker->numberBetween(001,002),
        ];
    }
}
