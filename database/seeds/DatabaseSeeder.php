<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(StudentsTableSeeder::class);
         $this->call(ArtistsTableSeeder::class);
         $this->call(SongsTableSeeder::class);
         $this->call(AlbumsTableSeeder::class);
         $this->call(LabelsTableSeeder::class);
    }
}
