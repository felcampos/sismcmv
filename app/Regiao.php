<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'sis_opc_regiao';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // protocolo metodo.
    public function ufs()
    {
       return $this->hasMany(Uf::class);// possui muitos
    } 
}
