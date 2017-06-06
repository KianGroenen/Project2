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
    		DB::table('pronostieks')->insert([
            'firsthalfvic' => 'Anderlecht',
            'victorious' => 'Mechelen',
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'bothteamscore' => 0,
            'goalguess' => 1,
            'firstgoal' => 'Anderlecht',
            'winwithoutextension' => 1,
            'cards' => '4',
            'corners' => '3',
            'penalties' => 0,
            'schiftings' => '30000',
            'userid' => ,
            'matchid' => 1,
            'score' => 0,
        	]);
        	DB::table('pronostieks')->insert([
            'firsthalfvic' => 'Mechelen',
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'bothteamscore' => 1,
            'goalguess' => 1,
            'firstgoal' => str_random(10),
            'winwithoutextension' => 1,
            'cards' => '0',
            'corners' => '3',
            'penalties' => 0,
            'schiftings' => '30000',
            'userid' => 2,
            'matchid' => 2,
            'score' => 0,
        	]);
        	DB::table('pronostieks')->insert([
            'firsthalfvic' => 'Anderlecht',
            'victorious' => str_random(10),
            'score1' => random_int(0,10),
            'score2' => random_int(0,10),
            'bothteamscore' => 0,
            'goalguess' => 0,
            'firstgoal' => str_random(10),
            'winwithoutextension' => 1,
            'cards' => '1',
            'corners' => '3',
            'penalties' => 0,
            'schiftings' => '30000',
            'userid' => 3,
            'matchid' => 1,
            'score' => 0,
        	]);
        	DB::table('pronostieks')->insert([
            'firsthalfvic' => 'Anderlecht',
            'victorious' => 'KV Mechelen',
            'score1' => 1,
            'score2' => 2,
            'bothteamscore' => 1,
            'goalguess' => 0,
            'firstgoal' => str_random(10),
            'winwithoutextension' => 1,
            'cards' => '2',
            'corners' => '3',
            'penalties' => 0,
            'schiftings' => '20000',
            'userid' => 1,
            'matchid' => 4,
            'score' => 0,
        	]);
    }
}
