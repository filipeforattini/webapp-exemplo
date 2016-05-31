<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function fabricante()
    {
    	return $this->belongsTo('App\Fabricante');
    }
}
