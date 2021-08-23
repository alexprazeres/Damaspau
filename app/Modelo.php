<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    public function imagens()
    {
        return $this->hasMany(ModeloImagem::class,'id_modelo');
    }
}
