<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'sis_opc_genero';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // beneficiarios metodo.
    public function beneficiarios()
    {
       $this->hasMany(Beneficiario::class); 
    } 
}
