<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersTableSeeder::class);
        $this->call(CodeTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
    	$this->call(PronostiekTableSeeder::class);
    }
}
