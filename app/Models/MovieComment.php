<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieComment extends Model
{
    protected $fillable = [
        'movie_id', 
        'user_id', 
        'text',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

