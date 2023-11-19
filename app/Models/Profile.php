<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'fulname', 'username', 'phone', 'lokasi', 'bio', 'foto_profil',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
