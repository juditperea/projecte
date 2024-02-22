<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SerieComment extends Model
{
    protected $fillable = [
        'serie_id',
         'user_id', 
         'text',
    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
