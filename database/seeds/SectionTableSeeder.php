<?php

use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=20; $i++) {
            DB::table('sections')->insert([
                'subject_id'  => rand(1, 3),
                'title'       => 'Section '.$i.' Course',
                'like'        =>rand(20, 1000),
                'description' => str_random(500),
                'created_at'  => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'  => \Carbon\Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
