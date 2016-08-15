<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    protected $table = 'oferta_tab_protocolo';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    //metodo que faz referência à relação desta tabela com a tabela modalidade.
    public function modalidade()
    {
       return $this->belongsTo(Modalidade::class); //pertence a
    } 

    // municipio metodo.
    public function municipio()
    {
       return $this->belongsTo(Municipio::class); //pertence a
    }

    public function contratos()
    {
       return $this->hasMany(Contrato::class); //possui muitos
    }

    // protocolos metodo.
    public function instituicoes()
    {
       return $this->belongsToMany(Instituicao::class, 'oferta_tab_protocolos_instituicao');
    } 
}
