<?php
// PerjalananExport.php
// PerjalananExport.php

namespace App\Exports;

use App\Models\Perjalanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerjalananExport implements FromCollection, WithHeadings, WithMapping
{
    protected $perjalanans;

    public function __construct($perjalanans)
    {
        $this->perjalanans = $perjalanans;
    }

    public function collection()
    {
        return $this->perjalanans;
    }

    public function headings(): array
    {
        // Define the column headings
        return [
            'Alamat Awal',
            'Alamat Tujuan',
            'KM Awal',
            'KM Akhir',
            'Jenis Perjalanan',
            'Tipe Kendaraan',
            'No Polisi',
            'Lampu Depan',
            'Lampu Sen Depan',
            'Lampu Sen Belakang',
            'Lampu Rem',
            'Lampu Mundur',
            'Body',
            'Ban',
            'Klakson',
            'Pedal Gas',
            'Pedal Kopling',
            'Pedal Rem',
            'Weaper',
            'Air Weaper',
            'Air Radiator',
            'Oli Mesin',
            'Catatan',
            
            // ... add more columns as needed
        ];
    }

    public function map($perjalanan): array
    {
        // Map the columns to be exported, excluding id and foreign key
        return [
            $perjalanan->alamat_awal,
            $perjalanan->alamat_tujuan,
            $perjalanan->km_awal,
            $perjalanan->km_akhir,
            $perjalanan->jenis_perjalanan,
            $perjalanan->tipe_kendaraan,
            $perjalanan->no_polisi,
            $perjalanan->lampu_depan,
            $perjalanan->lampusen_depan,
            $perjalanan->lampusen_belakang,
            $perjalanan->lampu_rem,
            $perjalanan->lampu_mundur,
            $perjalanan->body,
            $perjalanan->ban,
            $perjalanan->klakson,
            $perjalanan->pedal_gas,
            $perjalanan->pedal_kopling,
            $perjalanan->pedal_rem,
            $perjalanan->weaper,
            $perjalanan->air_weaper,
            $perjalanan->air_radiator,
            $perjalanan->oli_mesin,
            $perjalanan->catatan,
            // ... add more columns as needed
        ];
    }
}
