<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            User::create(
                [
                    'name' => $faker->firstName(),
                    'email' => $faker->unique()->email,
                    'password' => Hash::make('qwerty'),
                ]
            );
        }
    }
}
