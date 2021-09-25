<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

DB::table('loginmodule')->insert(['name'=>'Abc',//Str::random(10),
                             'email'=>'Abc@gmail.com',//Str::random(10).'@gmail.com',
                             'password'=>Hash::make('test123'),
                             'remember_token'=>Str::random(10),
]);