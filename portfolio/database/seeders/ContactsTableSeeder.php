<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'user_id' => 1,
            'contact_type' => 'facebook',
            'contact_value' => 'https://www.facebook.com/iftekhar.eather',
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'contact_type' => 'linkedin',
            'contact_value' => 'https://www.linkedin.com/in/iftekhareather/',
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'contact_type' => 'twitter',
            'contact_value' => 'http://twitter.com/IftekharEather',
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'contact_type' => 'flickr',
            'contact_value' => 'https://www.flickr.com/photos/eatherahmed/',
        ]);
    }
}
