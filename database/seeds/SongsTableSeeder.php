<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,1000) as $index) {
        	$artistid = rand(1, 500);
        	$song = new App\Song();
        	$song->name = $faker->sentence(6, true); // max 6, variable number
        	$song->artist_id = $artistid;
        	$song->save();
        }
    }
}
