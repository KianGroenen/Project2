<?php

use Illuminate\Database\Seeder;

class PronostiekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		DB::table('pronostieken')->insert([
            'date' => '2017-05-12',
            'team1' => 'Mechelen',
            'team2' => 'Anderlecht',
            'victorious' => 'Mechelen',
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => 'Anderlecht',
            'userid' => 1,
        	]);
        	DB::table('pronostieken')->insert([
            'date' => '2017-05-13',
            'team1' => str_random(10),
            'team2' => str_random(10),
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => str_random(10),
            'userid' => 2,
        	]);
        	DB::table('pronostieken')->insert([
            'date' => '2017-05-14',
            'team1' => str_random(10),
            'team2' => str_random(10),
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => str_random(10),
            'userid' => 3,
        	]);
        	DB::table('pronostieken')->insert([
            'date' => '2017-05-15',
            'team1' => str_random(10),
            'team2' => str_random(10),
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => str_random(10),
            'userid' => 4,
        	]);
    }
}
