<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'Core4Switch',
            'project_details' => 'Secure billing platform which can be operated for both wholesale and retail industry',
            'project_url' => 'https://www.divineit.net/products/core4switch/',
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'Nothi',
            'project_details' => 'Paperless Office Solution
Enhancement and Maintenance of eNothi System (D-Nothi)',
            'project_url' => 'https://www.nothi.gov.bd/',
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'National Portal',
            'project_details' => 'Development of National Portal System for Government of Bangladesh',
            'project_url' => 'https://bangladesh.gov.bd/index.php',
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'PrimaCare365',
            'project_details' => 'PrimaCare365-Clinic, Doctor, Patient & Inventory Management System',
            'project_url' => null,
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'Online Appointment System',
            'project_details' => 'Doctor-Patient Appointment system for Japan company',
            'project_url' => null,
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'Toyox Hose',
            'project_details' => null,
            'project_url' => 'https://toyox-hose.com/hose/',
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'Tokyo SME',
            'project_details' => null,
            'project_url' => null,
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'Nikon China',
            'project_details' => null,
            'project_url' => 'https://www.nikon-precision.com.cn/',
            'project_photo' => null,
        ]);


        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'Jico Stylus',
            'project_details' => null,
            'project_url' => 'https://www.jico-stylus.com/',
            'project_photo' => null,
        ]);

        DB::table('projects')->insert([
            'user_id' => 1,
            'project_name' => 'EXJ Tools',
            'project_details' => 'EXJ Tools is an inhouse system for management all Internal process including accounting, project management, time management etc.',
            'project_url' => null,
            'project_photo' => null,
        ]);
    }
}
