<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    protected $fillable = [
        'film_id',
        'user_id',
        'rating',
        'komentar'
    ];

    protected $casts = [
        'film_id' => 'integer',
        'user_id' => 'integer',
        'rating' => 'integer'
    ];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
