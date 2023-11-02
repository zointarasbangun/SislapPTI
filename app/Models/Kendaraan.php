<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'no_polisi',
        'tgl_masuk',
        'photo'
    ];

    // protected $appends = ['photo_url'];

    // // app/Kendaraan.php

    // public function getPhotoUrlAttribute()
    // {
    //     return asset('storage/' . $this->photo);
    // }


}
