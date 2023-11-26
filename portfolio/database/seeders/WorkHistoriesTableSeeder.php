<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_histories')->insert([
            'user_id' => 1,
            'company_id' => 1,
            'join_date' => '2012-08-01',
            'resign_date' => '2015-08-31',
            'designation' => 'Software Engineer',
        ]);

        DB::table('work_histories')->insert([
            'user_id' => 1,
            'company_id' => 2,
            'join_date' => '2015-09-01',
            'resign_date' => '2016-06-30',
            'designation' => 'Software Engineer',
        ]);

        DB::table('work_histories')->insert([
            'user_id' => 1,
            'company_id' => 2,
            'join_date' => '2016-07-01',
            'resign_date' => '2019-01-31',
            'designation' => 'Project Manager',
        ]);

        DB::table('work_histories')->insert([
            'user_id' => 1,
            'company_id' => 3,
            'join_date' => '2019-02-01',
            'resign_date' => '2023-06-30',
            'designation' => 'System Engineer',
        ]);

        DB::table('work_histories')->insert([
            'user_id' => 1,
            'company_id' => 3,
            'join_date' => '2023-07-01',
            'resign_date' => null,
            'designation' => 'Team Lead',
        ]);

    }
}
