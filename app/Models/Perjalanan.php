<?php

namespace App\Models;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perjalanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_perjalanan',
        'alamat_awal',
        'alamat_tujuan',
        'km_awal',
        'km_akhir',
        'tipe_kendaraan',
        'no_polisi',
        'jenis_perjalanan',
        'lampu_depan',
        'lampu_sen_depan',
        'lampu_sen_belakang',
        'lampu_rem',
        'lampu_mundur',
        'body',
        'ban',
        'klakson',
        'pedal_gas',
        'pedal_kopling',
        'pedal_rem',
        'weaper',
        'air_weaper',
        'air_radiator',
        'oli_mesin',
        'photo_km_awal',
        'photo_km_akhir',
        'catatan',
    ];

    public function Kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
