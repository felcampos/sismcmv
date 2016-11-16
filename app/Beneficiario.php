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

    // Tabela genro possui muitos beneficiários.
    public function genero()
    {
       return $this->belongsTo(Genero::class);// pertence a
    }

    // Tabela genro possui muitos beneficiários.
    public function estado_civil()
    {
       return $this->belongsTo(EstadoCivil::class);// pertence a
    }

    // Beneficiario pertence a um contrato.
    public function pagamentos()
    {
       return $this->hasMany(Pagamento::class);// pertence a
    }
}
