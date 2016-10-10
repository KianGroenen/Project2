<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,200) as $index) {
        	$album = new App\Album();
            $album->cover = $faker->imageUrl();
        	$album->name = $faker->sentence(4, true);
        	$album->save();

        	// attach random songs
            foreach (range(1,20) as $index) {
        	   $songid = rand(1,1000);
        	   $album->songs()->attach($songid);
            }
        }
    }
}
