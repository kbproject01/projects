<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class,5)->create();
        factory(App\Models\UserProfile::class,5)->create();
        factory(App\Models\Post::class,5)->create();
        factory(App\Models\Comment::class,5)->create();


    }
}
