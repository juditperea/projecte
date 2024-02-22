<?php

// app/Models/MovieList.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieList extends Model
{
    protected $fillable = [
        'list_id', 
        'movie_id',
         'status',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function userList()
    {
        return $this->belongsTo(UserList::class, 'list_id');
    }
}
