<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'oferta_tab_contratos';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // protocolo metodo.
    public function protocolo()
    {
       return $this->belongsTo(Protocolo::class); //pertence a
    } 

    // Instituição Financeira metodo.
    public function instituicao()
    {
       return $this->belongsTo(Instituicao::class); //pertence a
    }
    // beneficiarios metodo.
    public function beneficiarios()
    {
       return $this->hasMany(Beneficiario::class); //possui muitos
    } 
}
