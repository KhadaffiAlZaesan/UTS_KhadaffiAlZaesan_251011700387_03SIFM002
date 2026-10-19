<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'title', 'genre', 'duration', 'release_year', 'description', 'poster',
    ];
}
