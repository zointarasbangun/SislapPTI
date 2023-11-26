<?php

namespace App\Models;

use App\Models\User;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perjalanan extends Model
{
    use HasFactory;

    const STATUS_MENUNGGU = 'menunggu';
    const STATUS_DITOLAK = 'ditolak';
    const STATUS_DISETUJUI = 'disetujui';
    const STATUS_SELESAI = 'selesai';

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
        'lampusen_depan',
        'lampusen_belakang',
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
        'status_perjalanan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function Kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class, 'tipe_kendaraan_id');
    }

    public function getTotalKmAttribute()
    {
        return $this->attributes['km_akhir'] - $this->attributes['km_awal'];
    }

    public static function totalPerjalanan()
    {
        return self::count();
    }

    public static function countMenunggu()
    {
        return self::where('status_perjalanan', self::STATUS_MENUNGGU)->count();
    }

    public static function countSelesai()
    {
        return self::where('status_perjalanan', self::STATUS_SELESAI)->count();
    }

    public static function totalMenungguSelesai()
    {
        return self::countMenunggu() + self::countSelesai();
    }
}
