<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'username' => 'kian',
            'usercode' => 'kian',
            'password' => 'login',
            'email' => str_random(10).'@gmail.com',
            'supporter' => 	0,
            'currency' => random_int(0,10),
            'dailycode' => 1,
            'admin' => 0,
        ]);
        DB::table('users')->insert([
            'username' => str_random(10),
            'usercode' => str_random(10),
            'password' => 'login',
            'email' => str_random(10).'@gmail.com',
            'supporter' => 	0,
            'currency' => random_int(0,10),
            'dailycode' => 1,
            'admin' => 0,
        ]);
        DB::table('users')->insert([
            'username' => str_random(10),
            'usercode' => str_random(10),
            'password' => 'login',
            'email' => str_random(10).'@gmail.com',
            'supporter' => 	0,
            'currency' => random_int(0,10),
            'dailycode' => 1,
            'admin' => 0,
        ]);
        DB::table('users')->insert([
            'username' => str_random(10),
            'usercode' => str_random(10),
            'password' => 'login',
            'email' => str_random(10).'@gmail.com',
            'supporter' => 	0,
            'currency' => random_int(0,10),
            'dailycode' => 1,
            'admin' => 0,
        ]);
        DB::table('users')->insert([
            'username' => str_random(10),
            'usercode' => str_random(10),
            'password' => 'login',
            'email' => str_random(10).'@gmail.com',
            'supporter' => 	0,
            'currency' => random_int(0,10),
            'dailycode' => 1,
            'admin' => 0,
        ]);
    }
}
