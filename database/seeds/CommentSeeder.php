<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
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
            App\Comment::create([
                'id' => 1 + $i,
                'user_id' => rand(1, 10),
                'blog_id' => rand(1, 10),
                'comment' => "This blog like a bullshit!",
            ]);
        }
    }
}
