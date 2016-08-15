<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'tipo_usuario_id', 
        'cargo_id', 
        'departamento_id',
        'txt_email_particular',
        'dte_nascimento',
        'txt_ramal',
        'txt_celular',
        'txt_nome_foto',
        'txt_caminho_foto',
        'txt_caminho_avatar',
        'txt_telefone_residencial'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // cargo metodo.
    public function cargo()
    {
       return $this->belongsTo(Cargo::class);
    }

    // setor metodo.
    public function setor()
    {
       return $this->belongsTo(Setor::class);
    }

    // Tipo Usuario metodo.
    public function tipoUsuario()
    {
       return $this->belongsTo(TipoUsuario::class);
    }

}
