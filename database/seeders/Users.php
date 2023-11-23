<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> ''
            'email'=>'',
            'password'=>Hash::make('password'),
        ]);

        User::create([
            'name'=> ''
            'email'=>'',
            'password'=>Hash::make('password'),
        ]);
        
    }
}