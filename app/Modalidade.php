<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    protected $table = 'oferta_opc_modalidade';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    //Metodo que faz referência à relação desta tabela com a tabela protocolo.
    public function protocolo()
    {
       return $this->hasMany(Protocolo::class);// possui muitos
    } 
}
