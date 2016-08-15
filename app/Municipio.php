<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'sis_opc_municipios';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // protocolo metodo.
    public function protocolos()
    {
       return $this->hasMany(Protocolo::class);// possui muitos
    } 

    // uf metodo.
    public function uf()
    {
       return $this->belongsTo(Uf::class); //pertence a
    }

    // Município possui muitas Instituições Financeiras.
    public function instituicoes()
    {
       return $this->hasMany(Instituicao::class); // possui muitos
    } 

    // Município possui muitos Beneficiarios.
    public function beneficiarios()
    {
       return $this->hasMany(Beneficiario::class); // possui muitos
    } 
}
