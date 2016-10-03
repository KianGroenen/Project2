<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('students')->insert([
	            'firstname' => $faker->firstName,
	            'lastname' => $faker->lastName,
	            'email' => $faker->email,
	            'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
	        ]);
        }
    }
}
