<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    protected $table = 'sis_opc_uf';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // protocolo metodo.
    public function municipios()
    {
       return $this->hasMany(Municipio::class);// possui muitos
    }

    //uf metodo.
    public function regiao()
    {
       return $this->belongsTo(Regiao::class); //pertence a
    } 
}
