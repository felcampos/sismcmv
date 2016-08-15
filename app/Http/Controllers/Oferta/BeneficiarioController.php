<?php

namespace App\Http\Controllers\Oferta;

use App\Beneficiario;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeneficiarioController extends Controller
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
    public function index(Beneficiario $beneficiario)
    {
       $beneficiario->load('contrato.protocolo', 'municipio.uf');

       return view('oferta.beneficiarios.index', 
       	compact('beneficiario') );
    } 
}