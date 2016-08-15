<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $table = 'oferta_opc_instituicoes_financeiras';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // contratos metodo.
    public function contratos()
    {
       return $this->hasMany(Contrato::class);// possui muitos
    } 

    // IF possui pertence a um Município.
    public function municipio()
    {
       return $this->belongsTo(Municipio::class);// pertence a
    }
    
    // protocolos metodo.
    public function protocolos()
    {
       return $this->belongsToMany(Protocolo::class, 'oferta_tab_protocolos_instituicao');
    } 
}
