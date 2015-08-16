<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'title' => 'Laravel 5.1 Framework',
            'type' => 'php',
            'vote'=>rand(1, 10),
            'description' => str_random(500),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'Phalcon Framework ',
            'type' => 'php',
            'vote'=>rand(1, 10), 
            'description' => str_random(500),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'CodeIgniter Framework',
            'type' => 'php',
            'vote'=>rand(1, 10),
            'description' => str_random(500),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'Yii Framework',
            'type' => 'php',
            'vote'=>rand(1, 10),
            'description' => str_random(500),  
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'PHP Principle',
            'type' => 'php',
            'vote'=>rand(1, 10),
            'description' => str_random(500), 
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'Spring Boot',
            'type' => 'java',
            'vote'=>rand(1, 10),
            'description' => str_random(500), 
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'Java MVC',
            'type' => 'java',
            'vote'=>rand(1, 10),
            'description' => str_random(500), 
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'Java JPA',
            'type' => 'java',
            'vote'=>rand(1, 10),
            'description' => str_random(500), 
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'Automation Deployment',
            'type' => 'devops',
            'vote'=>rand(1, 10),
            'description' => str_random(500), 
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('subjects')->insert([
            'title' => 'AWS Clound',
            'type' => 'devops',
            'vote'=>rand(1, 10),
            'description' => str_random(500), 
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
