<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'sis_opc_cargo';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // Users metodo.
    public function users()
    {
       return $this->hasMany(User::class);
    } 
}
