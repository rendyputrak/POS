<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => '1',
                'barang_kode' => 'A1',
                'barang_nama' => 'Kaos',
                'harga_beli' => 25000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => '1',
                'barang_kode' => 'A2',
                'barang_nama' => 'Celana',
                'harga_beli' => 25000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => '2',
                'barang_kode' => 'B1',
                'barang_nama' => 'Earphone',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => '2',
                'barang_kode' => 'B2',
                'barang_nama' => 'Speaker',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => '3',
                'barang_kode' => 'C1',
                'barang_nama' => 'Sofa',
                'harga_beli' => 1000000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => '3',
                'barang_kode' => 'C2',
                'barang_nama' => 'Lukisan',
                'harga_beli' => 300000,
                'harga_jual' => 500000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => '4',
                'barang_kode' => 'D1',
                'barang_nama' => 'Beras',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => '4',
                'barang_kode' => 'D2',
                'barang_nama' => 'Susu',
                'harga_beli' => 30000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => '5',
                'barang_kode' => 'E1',
                'barang_nama' => 'Sabun',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => '5',
                'barang_kode' => 'E2',
                'barang_nama' => 'Pasta Gigi',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],

        ];
        DB::table('m_barang')->insert($data);
    }
}
