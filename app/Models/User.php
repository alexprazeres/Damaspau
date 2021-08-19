<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //
    protected $fillable = [ 'cpf', 'password',"nome","system_unit_id","gerente_id" ];
    protected $table = 'coordenador';
}
