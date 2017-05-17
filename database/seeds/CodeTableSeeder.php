<?php

use Illuminate\Database\Seeder;

class CodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            'code' => (string)random_int(0,100000),
            'active' => 1,
        ]);
        DB::table('codes')->insert([
            'code' => (string)random_int(0,100000),
            'active' => 1,
        ]);
        DB::table('codes')->insert([
            'code' => (string)random_int(0,100000),
            'active' => 1,
        ]);
        DB::table('codes')->insert([
            'code' => (string)random_int(0,100000),
            'active' => 0,
        ]);
        DB::table('codes')->insert([
            'code' => (string)random_int(0,100000),
            'active' => 0,
        ]);
    }
}
