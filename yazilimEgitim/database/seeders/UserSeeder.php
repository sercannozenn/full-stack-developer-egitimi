<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {

        for ($i = 0; $i < 10; $i++)
        {
            $faker = Factory::create();

            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('12345678')
            ]);
        }

        User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => bcrypt('12345678')
        ]);

    }
}
