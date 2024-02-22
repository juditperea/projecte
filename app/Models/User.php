<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\HasRoles;
use Spatie\Permission\Traits\HasRoles as TraitsHasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,TraitsHasRoles;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    protected $fillable = [
        'username', 
        'email', 
        'password',
    ];

    public function lists()
    {
        return $this->hasMany(UserList::class, 'user_id');
    }

    public function movieComments()
    {
        return $this->hasMany(MovieComment::class, 'user_id');
    }

    public function seriesComments()
    {
        return $this->hasMany(SerieComment::class, 'user_id');
    }
}


