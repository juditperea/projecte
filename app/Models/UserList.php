<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    protected $fillable = [
        'name', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_lists', 'list_id', 'movie_id')->withPivot('status');
    }

    public function series()
    {
        return $this->belongsToMany(Serie::class, 'series_lists', 'list_id', 'series_id')->withPivot('status');
    }
}
