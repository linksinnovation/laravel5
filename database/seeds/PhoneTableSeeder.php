<?php

use Illuminate\Database\Seeder;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            'brand' => 'iPhone',
            'user_id' => 1,
        ]);

        DB::table('phones')->insert([
            'brand' => 'Android',
            'user_id' => 2,
        ]);

        DB::table('phones')->insert([
            'brand' => 'Window Phone',
            'user_id' => 3,
        ]);
    }
}
