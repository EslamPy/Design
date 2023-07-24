<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i <= 50; $i++) {
            $name = $faker->sentence(10);
            $truncatedName = substr($name, 0, 50); // Truncate to 50 characters if needed

            \App\Models\services::create([
                'name' => $truncatedName,
                'description' => $faker->paragraph(4),
                'price' => $faker->numberBetween(100, 1000),
                'duration' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
