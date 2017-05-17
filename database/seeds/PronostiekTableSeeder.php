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
            'firsthalfvic' => 'Anderlecht',
            'victorious' => 'Mechelen',
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => 'Anderlecht',
            'corners' => '3',
            'penalties' => 0,
            'userid' => 1,
            'matchid' => 1,
        	]);
        	DB::table('pronostieken')->insert([
            'date' => '2017-05-13',
            'team1' => str_random(10),
            'team2' => str_random(10),
            'firsthalfvic' => 'Mechelen',
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => str_random(10),
            'corners' => '3',
            'penalties' => 0,
            'userid' => 2,
            'matchid' => 2,
        	]);
        	DB::table('pronostieken')->insert([
            'date' => '2017-05-14',
            'team1' => str_random(10),
            'team2' => str_random(10),
            'firsthalfvic' => 'Anderlecht',
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => str_random(10),
            'corners' => '3',
            'penalties' => 0,
            'userid' => 3,
            'matchid' => 1,
        	]);
        	DB::table('pronostieken')->insert([
            'date' => '2017-05-15',
            'team1' => str_random(10),
            'team2' => str_random(10),
            'firsthalfvic' => 'Leuven',
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'firstgoal' => str_random(10),
            'corners' => '3',
            'penalties' => 0,
            'userid' => 4,
            'matchid' => 3,
        	]);
    }
}
