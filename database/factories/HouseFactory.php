<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Decimal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\house>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ukuran' => $this->faker->buildingNumber,
            'jml_kamar' => $this->faker->biasedNumberBetween,
            'harga' => $this->faker->buildingNumber,
            'alamat' => $this->faker->address,
        ];
    }
}
