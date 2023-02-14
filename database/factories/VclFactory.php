<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vcl>
 */
class VclFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'plate_id' => 'A26405',
            'plate_code' => '03',
            'plate_city' => 'AA',
            'chassis_number' => fake()->numberBetween(1 , 1000),
            'motor_number' => fake()->numberBetween(1 , 1000),
            'vcl_model' => 'Rerum beatae labore',
            'fuel_type' => 'benzen',
            'category_name' => 'issuzu',
            'purchase_date' => '1984-08-07',
            'manufacture_date' => '1982-08-07',
        ];
    }
}
