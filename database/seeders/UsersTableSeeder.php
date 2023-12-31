<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Clear existing records to start with a clean slate

         // Seed a default user
         User::create([
             'name' => 'John Doe',
             'email' => 'john@example.com',
             'password' => Hash::make('password'),
         ]);
 
    }
}
