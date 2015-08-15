<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mr. A',
            'email' => str_random(10).'@gmail.com',
            'password' => Hash::make('test'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mr. B',
            'email' => str_random(10).'@gmail.com',
            'password' => Hash::make('test'),
        ]);

        DB::table('users')->insert([
            'name' => 'Miss. C',
            'email' => str_random(10).'@gmail.com',
            'password' => Hash::make('test'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mr. Links Innovation',
            'email' => str_random(10).'@gmail.com',
            'password' => Hash::make('test'),
        ]);
    }

    /*public function down()
    {
            DB::table('users')->delete();
    }*/
}
