<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // [
            //     'penjualan_id' => 1,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Agus',
            //     'penjualan_kode' => '0001',
            // ],            
            // [
            //     'penjualan_id' => 2,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Joni',
            //     'penjualan_kode' => '0002',
            // ],            
            // [
            //     'penjualan_id' => 3,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Bobi',
            //     'penjualan_kode' => '0003',
            // ],            
            // [
            //     'penjualan_id' => 4,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Candra',
            //     'penjualan_kode' => '0004',
            // ],            
            // [
            //     'penjualan_id' => 5,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Eko',
            //     'penjualan_kode' => '0005',
            // ],            
            // [
            //     'penjualan_id' => 6,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Kaka',
            //     'penjualan_kode' => '0006',
            // ],            
            // [
            //     'penjualan_id' => 7,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Lilo',
            //     'penjualan_kode' => '0007',
            // ],            
            // [
            //     'penjualan_id' => 8,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Budi',
            //     'penjualan_kode' => '0008',
            // ],            
            // [
            //     'penjualan_id' => 9,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Ahmad',
            //     'penjualan_kode' => '0009',
            // ],            
            // [
            //     'penjualan_id' => 10,
            //     'user_id' => 3,
            //     'penjualan_tanggal' => '2024-02-29',
            //     'pembeli' => 'Fadil',
            //     'penjualan_kode' => '0010',
            // ],
            [
                'penjualan_id' => 11,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Agus',
                'penjualan_kode' => '0001',
            ],            
            [
                'penjualan_id' => 12,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Joni',
                'penjualan_kode' => '0002',
            ],            
            [
                'penjualan_id' => 13,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Bobi',
                'penjualan_kode' => '0003',
            ],            
            [
                'penjualan_id' => 14,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Candra',
                'penjualan_kode' => '0004',
            ],            
            [
                'penjualan_id' => 15,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Eko',
                'penjualan_kode' => '0005',
            ],            
            [
                'penjualan_id' => 16,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Kaka',
                'penjualan_kode' => '0006',
            ],            
            [
                'penjualan_id' => 17,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Lilo',
                'penjualan_kode' => '0007',
            ],            
            [
                'penjualan_id' => 18,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Budi',
                'penjualan_kode' => '0008',
            ],            
            [
                'penjualan_id' => 19,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Ahmad',
                'penjualan_kode' => '0009',
            ],            
            [
                'penjualan_id' => 20,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Fadil',
                'penjualan_kode' => '0010',
            ],
            [
                'penjualan_id' => 21,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Agus',
                'penjualan_kode' => '0001',
            ],            
            [
                'penjualan_id' => 22,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Joni',
                'penjualan_kode' => '0002',
            ],            
            [
                'penjualan_id' => 23,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Bobi',
                'penjualan_kode' => '0003',
            ],            
            [
                'penjualan_id' => 24,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Candra',
                'penjualan_kode' => '0004',
            ],            
            [
                'penjualan_id' => 25,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Eko',
                'penjualan_kode' => '0005',
            ],            
            [
                'penjualan_id' => 26,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Kaka',
                'penjualan_kode' => '0006',
            ],            
            [
                'penjualan_id' => 27,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Lilo',
                'penjualan_kode' => '0007',
            ],            
            [
                'penjualan_id' => 28,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Budi',
                'penjualan_kode' => '0008',
            ],            
            [
                'penjualan_id' => 29,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Ahmad',
                'penjualan_kode' => '0009',
            ],            
            [
                'penjualan_id' => 30,
                'user_id' => 3,
                'penjualan_tanggal' => '2024-02-29',
                'pembeli' => 'Fadil',
                'penjualan_kode' => '0010',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
