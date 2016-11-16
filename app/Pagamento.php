<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'oferta_tab_pagamentos';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // Um pagamento pertence à uma Nota
    public function nota()
    {
       return $this->belongsTo(Nota::class);// pertence a
    }


    // Um pagamento pertence à uma Nota
    public function contrato()
    {
       return $this->belongsTo(Contrato::class);// pertence a
    }

    // Tabela genro possui muitos beneficiários.
    public function beneficiario()
    {
       return $this->belongsTo(Beneficiario::class);// pertence a
    }


}
