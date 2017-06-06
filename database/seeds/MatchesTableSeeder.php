<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'date' => '2017-05-12',
            'team1' => 'Mechelen',
            'team2' => 'Anderlecht',
            'firsthalfvic' => '',
            'victorious' => '',
            'score1' => 0,
            'score2' => 0,
            'bothteamscore' => 0,
            'goalguess' => 0,
            'firstgoal' => '',
            'winwithoutextension' => 0,
            'cards' => '0',
            'corners' => '',
            'penalties' => 0,
            'schiftings' => '',
        ]);

        DB::table('matches')->insert([
            'date' => '2017-05-13',
            'team1' => 'Mechelen',
            'team2' => 'Gent',
            'firsthalfvic' => '',
            'victorious' => '',
            'score1' => 0,
            'score2' => 0,
            'bothteamscore' => 0,
            'goalguess' => 0,
            'firstgoal' => '',
            'winwithoutextension' => 0,
            'cards' => '0',
            'corners' => '',
            'penalties' => 0,
            'schiftings' => '',
        ]);

        DB::table('matches')->insert([
            'date' => '2017-05-14',
            'team1' => 'Mechelen',
            'team2' => 'Leuven',
            'firsthalfvic' => '',
            'victorious' => '',
            'score1' => 0,
            'score2' => 0,
            'bothteamscore' => 0,
            'goalguess' => 0,
            'firstgoal' => '',
            'winwithoutextension' => 0,
            'cards' => '0',
            'corners' => '',
            'penalties' => 0,
            'schiftings' => '',
        ]);
    }
}