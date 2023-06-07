<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'kodebarang' => 'V27',
                'namabarang' => 'Vivo V27 5G',
                'hargabarang' => 6000000,
                'deskripsibarang' => 'Mediatek Dimensity 7200 5G',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'X16',
                'nama_barang' => 'Asus Vivobook X16 OLED',
                'harga_barang' => 33000000,
                'deskripsi_barang' => 'Layar Lebar',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'S8',
                'nama_barang' => 'Apple Watch Series 8',
                'harga_barang' => 10000000,
                'deskripsi_barang' => 'Jam Keren',
                'satuan_id' => 3
            ]
        ]);
    }
}
