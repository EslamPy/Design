<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i <= 50; $i++) {
            $title = $faker->sentence(10);
            $truncatedTitle = substr($title, 0, 50); // Truncate to 50 characters if needed

            \App\Models\projects::create([
                'title' => $truncatedTitle,
                'description' => $faker->paragraph(4),
                'start_date' => $faker->dateTime,
                'end_date' => $faker->dateTime,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
