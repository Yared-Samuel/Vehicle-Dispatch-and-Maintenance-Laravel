<?php

namespace Database\Seeders;
use App\Models\Vcl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Vcls extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vcl::create([
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
            'image'=>'ID',
            'created_by'=>'1'
        ]);
    }
}
