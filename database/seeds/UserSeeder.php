<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            App\User::create([
                'id' => 1 + $i,
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('12345'),
            ]);
        }
    }
}
