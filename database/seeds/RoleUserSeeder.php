<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
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
            App\RoleUser::create([
                'user_id' => rand(1, 10),
                'role_id' => rand(1, 10)
            ]);
        }
    }
}
