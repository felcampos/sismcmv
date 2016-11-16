<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRemessa extends Model
{
    protected $table = 'oferta_opc_tipo_remessa';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    public function notas()
    {
       return $this->hasMany(Nota::class);// possui muitos
    } 
}
