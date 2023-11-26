<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Iftekhar Ahmed Eather',
            'email' => 'eather.ahmed@gmail.com',
            'password' => 'testPassword',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
