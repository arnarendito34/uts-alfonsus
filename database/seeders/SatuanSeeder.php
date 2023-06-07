<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kodeSatuan' => 'HP',
                'namaSatuan' => 'Handphone',
            ],
            [
                'kodeSatuan' => 'LP',
                'namaSatuan' => 'Laptop/Macbook',
            ],
            [
                'kodeSatuan' => 'WC',
                'namaSatuan' => 'Watch/Jam Tangan',
            ],
            [
                'kodeSatuan' => 'TB',
                'namaSatuan' => 'Tablet/IPad',
            ],
            [
                'kodeSatuan' => 'TV',
                'namaSatuan' => 'Televisi/Monitor',
            ],
        ]);
    }
}
