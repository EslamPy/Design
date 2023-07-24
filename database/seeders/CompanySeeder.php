<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i <= 50; $i++){
            \App\Models\users::create([
                'name' => $faker->sentence(10),
                'email' => $faker->email,
                'password' => $faker->password,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }

    }
}
