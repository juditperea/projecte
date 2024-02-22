<?php

// app/Models/SeriesList.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeriesList extends Model
{
    protected $fillable = [
        'list_id', 
        'serie_id',
        'status',
    ];

    public function series()
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }

    public function userList()
    {
        return $this->belongsTo(UserList::class, 'list_id');
    }
}
