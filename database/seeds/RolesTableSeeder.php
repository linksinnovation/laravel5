<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('roles')->insert([
            'name' => 'Gruest',
        ]);*/

        DB::table('roles')->insert(
            array(
                    array('name' => 'Guest'),
                    array('name' => 'Attendee'),
                    array('name' => 'Member'),
                    array('name' => 'Admin'),                                
            ));

    }

    /*public function down()
    {
            DB::table('roles')->delete();
    }*/
}
