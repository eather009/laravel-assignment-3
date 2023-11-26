<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
           'user_id' => 1,
           'date_of_birth' => '1990-11-20',
           'profile_photo' => 'profile/1.jpg',
           'bio' => 'CSPO, CSM, A-CSD, CSD, FSD',
        ]);
    }
}
