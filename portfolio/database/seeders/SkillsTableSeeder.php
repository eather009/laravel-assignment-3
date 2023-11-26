<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            'user_id' => 1,
            'skill_name' => 'AWS',
            'value_of_ten' => 6.5,
            'proof_url' => null,
        ]);
        DB::table('skills')->insert([
            'user_id' => 1,
            'skill_name' => 'Ali cloud',
            'value_of_ten' => 6,
            'proof_url' => null,
        ]);

        DB::table('skills')->insert([
            'user_id' => 1,
            'skill_name' => 'PHP',
            'value_of_ten' => 7.5,
            'proof_url' => null,
        ]);

        DB::table('skills')->insert([
            'user_id' => 1,
            'skill_name' => 'MySQL',
            'value_of_ten' => 7,
            'proof_url' => null,
        ]);

        DB::table('skills')->insert([
            'user_id' => 1,
            'skill_name' => 'JS',
            'value_of_ten' => 6.5,
            'proof_url' => null,
        ]);

        DB::table('skills')->insert([
            'user_id' => 1,
            'skill_name' => 'Scrum',
            'value_of_ten' => 7,
            'proof_url' => null,
        ]);
    }
}
