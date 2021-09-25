<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Chathura',
            'email'=>'lakmal@gmail.com',
            'password'=>Hash::make('chathura'),
            'remember_token'=>Str::random(10)
           ]);
           DB::table('users')->insert([
            'name'=>'andriya',
            'email'=>'and@gmail.com',
            'password'=>Hash::make('andriya'),
            'remember_token'=>Str::random(10)
           ]);
           DB::table('users')->insert([
            'name'=>'Nimal',
            'email'=>'nimal@gmail.com',
            'password'=>Hash::make('nimal'),
            'remember_token'=>Str::random(10)
           ]);
    }
}
