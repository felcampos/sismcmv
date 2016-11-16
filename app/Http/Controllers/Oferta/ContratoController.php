<?php

namespace App\Http\Controllers\Oferta;

use App\Contrato;
use App\Pagamento;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContratoController extends Controller
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

    // index Contrato $contrato metodo.
    public function index(Contrato $contrato)
    {
        
      $contrato->load('beneficiarios', 'protocolo', 'instituicao');

      $pagamentos = Pagamento::where('contrato_id', $contrato->id)->orderBy('num_parcela', 'asc')->with('beneficiario', 'nota')->get();



       return view('oferta.contratos.index', 
       	compact('contrato', 'pagamentos') );
    } 
}
