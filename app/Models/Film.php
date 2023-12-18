<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'film';

    protected $fillable = [
        'judul',
        'sinopsis',
        'tahun',
        'poster',
        'sutradara',
        'video-link',
        'kategori_id',
        'genre_id'
    ];

    protected $casts = [
        'kategori_id' => 'integer',
        'tahun' => 'integer'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriFilm::class, 'kategori_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
