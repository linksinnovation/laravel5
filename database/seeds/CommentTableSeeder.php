<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 1,
            'message' => 'Comment 1 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 1,
            'message' => 'Comment 2 -'.str_random(20),
        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'message' => 'Comment 3 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 1,
            'message' => 'Comment 4 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 1,
            'message' => 'Comment 5 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 2,
            'message' => 'Comment 6 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 2,
            'message' => 'Comment 7 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 2,
            'message' => 'Comment 8 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 3,
            'message' => 'Comment 9 -'.str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' => 3,
            'message' => 'Comment 10 -'.str_random(20),
        ]);
    }

}
