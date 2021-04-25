<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $role = ['admin', 'staff', 'manager'];
        for ($i = 0; $i < 10; $i++) {
            App\Role::create([
                'id' => 1 + $i,
                'name' => $faker->randomElement($role)
            ]);
        }
    }
}
