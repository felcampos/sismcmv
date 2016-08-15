<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'sis_opc_tipo_usuario';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // Users metodo.
    public function users()
    {
       return $this->hasMany(User::class);
    }
}
