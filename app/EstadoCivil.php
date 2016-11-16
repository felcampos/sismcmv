<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    protected $table = 'sis_opc_estado_civil';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // beneficiarios metodo.
    public function beneficiarios()
    {
       $this->hasMany(Beneficiario::class); 
    } 
}
