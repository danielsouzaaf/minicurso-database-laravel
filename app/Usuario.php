<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function comentarios()
    {
      return $this->hasMany('App\Comentario');
    }

    public function roles()
    {
      return $this->belongsToMany('App\Role');
    }
}
