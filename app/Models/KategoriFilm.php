<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriFilm extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'nama'
    ];

    public function film()
    {
        return $this->hasMany(Film::class);
    }
}


