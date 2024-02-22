<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'description', 'genre', 'release_year', 'status',
    ];

    public function lists()
    {
        return $this->belongsToMany(UserList::class, 'movie_lists', 'movie_id', 'list_id')->withPivot('status');
    }

    public function comments()
    {
        return $this->hasMany(MovieComment::class, 'movie_id');
    }
}
