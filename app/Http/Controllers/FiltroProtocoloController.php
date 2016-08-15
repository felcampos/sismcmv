<?php

namespace App\Http\Controllers;

use App\Uf;
use App\Municipio;
use App\Instituicao;
use App\Http\Requests;
use Illuminate\Http\Request;

class FiltroProtocoloController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    // buscarEstado metodo.
    public function buscarEstados()
    {
       return  Uf::orderBy('ds_uf')->get();
    }


    // buscarInstituicoes metodo.
    public function buscarInstituicoes()
    {
       return Instituicao::orderBy('txt_nome_if')->get();
    } 

    // buscarMunicipios metodo.
    public function buscarMunicipios($estado)
    {
       return Municipio::where('uf_id', $estado)
       					->orderBy('ds_municipio')
       					->get();
    } 

    // SalvarFiltroNaSessao metodo.
    public static function FlashFiltroNaSessao($estado, $municipio, $oferta, $instituicao)
    {
       //Salvar o que foi filtrado na sessao, desta forma o angularjs pode captar o que foi filtrado pelo ng-init.
       session()->flash('estado', $estado);
       session()->flash('municipio', $municipio);
       session()->flash('oferta', $oferta);
       session()->flash('instituicao', $instituicao);
    } 
}
