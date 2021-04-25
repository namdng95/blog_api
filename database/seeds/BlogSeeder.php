<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
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
            App\Blog::create([
                'id' => 1 + $i,
                'user_id' => 1 + $i,
                'title' => "Why do we use it?",
                'content' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                'is_actived' => $faker->numberBetween(0, 1)
            ]);
        }
    }
}
