<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role_title'
    ];

    public function user()
    {
        return $this->hasMany('App\User', 'role_id', 'id');
    }
}
