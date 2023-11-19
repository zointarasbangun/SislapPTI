<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data dummy
        $kendaraans = [
            [
                'type' => 'Sedan',
                'no_polisi' => 'B 1234 CD',
                'tgl_masuk' => now(),
                'photo' => 'storage/photos/logo.png',
            ],
            [
                'type' => 'SUV',
                'no_polisi' => 'B 5678 EF',
                'tgl_masuk' => now(),
                'photo' => 'storage/photos/logo.png',
            ],
            // ... tambahkan data dummy lainnya sesuai kebutuhan
        ];

        // Simpan data dummy ke dalam tabel kendaraans
        foreach ($kendaraans as $kendaraan) {
            Kendaraan::create($kendaraan);
        }
    }
}
