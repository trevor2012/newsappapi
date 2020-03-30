<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class, 100)->create();
        factory(\App\Post::class, 1500)->create();
        factory(\App\Category::class, 10)->create();
        factory(\App\Tag::class, 50)->create();
        factory(\App\Images::class, 2500)->create();
        factory(\App\Video::class, 500)->create();
        factory(\App\Comments::class, 2500)->create();
        
    }
}
