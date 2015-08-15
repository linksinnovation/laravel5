<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Post1-'.str_random(3),
            'description' => str_random(100),
        ]);

        DB::table('posts')->insert([
            'title' => 'Post2-'.str_random(3),
            'description' => str_random(100),
        ]);

        DB::table('posts')->insert([
            'title' => 'Post3-'.str_random(3),
            'description' => str_random(100),
        ]);
    }

    /*public function down()
    {
            DB::table('posts')->delete();
    }*/
}
