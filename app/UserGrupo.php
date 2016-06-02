<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGrupo extends Model
{
    public $table = 'users_grupos';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function owner()
    {
    	return $this->morphTo();
    }
}
