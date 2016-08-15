<?php

namespace App\Http\Controllers\Oferta;

use App\Uf;
use App\Contrato;
use App\Protocolo;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FiltroProtocoloController;

class ProtocoloController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protocolos = $this->todosOsProtocolos();
        return view('oferta.protocolos.index', compact('protocolos'));
    }

    // filtrarProtocolo metodo.
    public function filtrarProtocolo(Request $request)
    {
       $estado = $request->input('estado');
       $municipio = $request->input('municipio');
       $oferta = $request->input('oferta');
       $instituicao = $request->input('instituicao');

       FiltroProtocoloController::FlashFiltroNaSessao($estado,
         $municipio, $oferta, $instituicao );

       $protocolos = $this->filtro($estado, $municipio, $oferta, $instituicao);

       

       return view('oferta.protocolos.index', compact('protocolos'));
    } 

    public function protocolo(Protocolo $protocolo)
    {
        $contratos = Contrato::where('protocolo_id', $protocolo->id)
                            ->orderBy('txt_contrato', 'asc')->get();

       $contratos->load('beneficiarios', 'protocolo.municipio.uf.regiao', 'instituicao');
       $protocolo->load('municipio.uf.regiao', 'modalidade', 'instituicoes');

        return view('oferta.protocolos.protocolo', compact('contratos', 'protocolo'));
    }

    // Seleciona todos os protocolos e ordena pela UF e Municipio
    protected function todosOsProtocolos()
    {
       return Protocolo::join('sis_opc_municipios', 'sis_opc_municipios.id', '=', 'oferta_tab_protocolo.municipio_id')
               ->join('sis_opc_uf', 'sis_opc_uf.id', '=', 'sis_opc_municipios.uf_id')
               ->orderBy('sis_opc_uf.ds_uf', 'asc')
               ->orderBy('sis_opc_municipios.ds_municipio', 'asc')
               ->select('oferta_tab_protocolo.*')       // just to avoid fetching anything from joined table
               ->with('municipio.uf.regiao', 'modalidade', 'instituicoes')
               ->paginate(20);
    } 

    // Seleciona todos os protocolos e ordena pela UF e Municipio
    protected function filtro($estado, $municipio, $oferta, $instituicao)
    {
        //Se nada for filtrado, retornar todos os protocolos
        if(!$estado && !$municipio && !$oferta && !$instituicao ){
          return $this->todosOsProtocolos();
        }

        $where = [];
        if($estado){
          $where[] = ['sis_opc_uf.id', $estado];
        }
         if($municipio){
          $where[] = ['sis_opc_municipios.id', $municipio];
        }
         if($oferta){
          $where[] = ['oferta_tab_protocolo.num_oferta', $oferta];
        }
         if($instituicao){
          $where[] = ['oferta_tab_protocolos_instituicao.instituicao_id', $instituicao];
        }


       return Protocolo::join('sis_opc_municipios', 'sis_opc_municipios.id', '=', 'oferta_tab_protocolo.municipio_id')
               ->join('sis_opc_uf', 'sis_opc_uf.id', '=', 'sis_opc_municipios.uf_id')
               ->join('oferta_tab_protocolos_instituicao', 'oferta_tab_protocolos_instituicao.protocolo_id', '=', 'oferta_tab_protocolo.id')
               ->orderBy('sis_opc_uf.ds_uf', 'asc')
               ->orderBy('sis_opc_municipios.ds_municipio', 'asc')
               ->select('oferta_tab_protocolo.*')       // just to avoid fetching anything from joined table
               ->where($where)
               ->with('municipio.uf.regiao', 'modalidade', 'instituicoes')
               ->paginate(20);
    } 
}
