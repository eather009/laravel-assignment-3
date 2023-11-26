<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educations')->insert([
            'user_id' => 1,
            'education_degree' => 'SSC',
            'institute_name' => 'SODA',
            'year_of_pass' => 2005,
            'grade' => null,
            'location' => 'Dhaka',
        ]);

        DB::table('educations')->insert([
            'user_id' => 1,
            'education_degree' => 'HSC',
            'institute_name' => 'CODA',
            'year_of_pass' => 2007,
            'grade' => null,
            'location' => 'Dhaka',
        ]);

        DB::table('educations')->insert([
            'user_id' => 1,
            'education_degree' => 'BSc',
            'institute_name' => 'BUBT',
            'year_of_pass' => 2012,
            'grade' => null,
            'location' => 'Dhaka',
        ]);
    }
}
