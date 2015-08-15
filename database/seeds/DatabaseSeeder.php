<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        //$this->call(PhotoTableSeeder::class);

        //$this->call(PhoneTableSeeder::class);

        //$this->call(PostTableSeeder::class);
        //$this->call(CommentTableSeeder::class);

        //$this->call(RolesTableSeeder::class);
        //$this->call(RoleUserTableSeeder::class);

        //Model::reguard();
    }
}
