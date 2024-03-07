<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'A',
                'kategori_nama' => 'Pakaian dan Aksesoris',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'B',
                'kategori_nama' => 'Elektronik dan Gadget',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'C',
                'kategori_nama' => 'Perabotan dan Dekorasi Rumah',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'D',
                'kategori_nama' => 'Makanan dan Minuman',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'E',
                'kategori_nama' => 'Kesehatan dan Kecantikan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
