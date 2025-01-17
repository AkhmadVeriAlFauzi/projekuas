<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Veri',
            'email'=>'veri@gmail.com',
            'password'=>Hash::make('halo1234')
        ]);
    }
}