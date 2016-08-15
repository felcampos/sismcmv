<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
   	protected $table = 'oferta_tab_beneficiarios';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // Beneficiario pertence a um contrato.
    public function contrato()
    {
       return $this->belongsTo(Contrato::class);// pertence a
    }

    // municipio metodo.
    public function municipio()
    {
       return $this->belongsTo(Municipio::class);// pertence a
    } 
}
