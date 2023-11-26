<?php

namespace App\Models;

use App\Models\Perjalanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'no_polisi',
        'tgl_masuk',
        'photo'
    ];

    public function perjalanan()
    {
        return $this->hasMany(Perjalanan::class,'tipe_kendaraan_id');
    }
    public static function totalKendaraan()
    {
        return self::count();
    }

    // Jika Anda menggunakan accessor untuk URL foto:
    // protected $appends = ['photo_url'];

    // public function getPhotoUrlAttribute()
    // {
    //     return asset('storage/' . $this->photo);
    // }
}
