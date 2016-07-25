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
         //$this->call(UserTableSeeder::class);

        factory(Basic\User::class, 10)->create()->each(function($u) {
            $u->posts()->save(factory(Basic\Post::class)->make());
        });

    }
}
