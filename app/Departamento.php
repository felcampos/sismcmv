<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'sis_opc_departamento';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // setor metodo.
    public function setor()
    {
       return $this->hasMany(Setor::class);
    }
}
