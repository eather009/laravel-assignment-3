<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'company_name' => 'Divine IT Limited',
            'company_address' => 'Uttora, Dhaka',
            'company_phone' => '+8801730071010',
            'company_url' => 'https://www.divineit.net/',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'TAPPWARE Solutions Limited',
            'company_address' => 'SEL Trident Tower (level-14th Floor) 57,<br/>Purana Paltan Line,<br/>Dhaka-1000',
            'company_phone' => '02-222229704',
            'company_url' => 'https://www.tappware.com/',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'エクスポート・ジャパン株式会社',
            'company_address' => '〒103-0027<br/>東京都中央区日本橋3-6-2<br/>日本橋フロント1Ｆ',
            'company_phone' => '03-6214-5881',
            'company_url' => 'https://www.export-japan.co.jp/',
        ]);
    }
}
