<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Serie extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'genre', 
        'start_year', 
        'end_year', 
        'status', 
        'number_of_seasons', 
        'number_of_episodes',
    ];

    public function lists()
    {
        return $this->belongsToMany(UserList::class, 'serie_lists', 'serie_id', 'list_id')->withPivot('status');
    }

    public function comments()
    {
        return $this->hasMany(SerieComment::class, 'serie_id');
    }
}
