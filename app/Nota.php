<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'oferta_tab_notas';

    public $timestamps = false; // tabela não possui coluna de data de criação/atualização

    //  Uma nota possui muitos pagamentos
    public function pagamentos()
    {
       return $this->hasMany(Pagamento::class);// possui muitos
    }

    public function tipo_remessa()
    {
       return $this->belongsTo(TipoRemessa::class);// possui muitos
    } 
}
