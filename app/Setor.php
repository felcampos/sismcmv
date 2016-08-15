<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'sis_opc_setor';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    // Departamentos metodo.
    public function departamento()
    {
       return $this->belongsTo(Departamento::class);
    }

    // Users metodo.
    public function users()
    {
       return $this->hasMany(User::class);
    }
}
