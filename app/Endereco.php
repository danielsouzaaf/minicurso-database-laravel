<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }
}
