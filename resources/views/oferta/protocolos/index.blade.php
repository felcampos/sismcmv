@extends('layouts.app')

@section('conteudo')
 
	<!-- cabeçalho da pagina -->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>Protocolos</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href='{{ url("/") }}'>Inicio</a></li>
				<li><i class="icon_house_alt"></i>Oferta Pública</li>
				<li><i class="fa fa-file-text-o"></i>Protocolos</li>
			</ol>
		</div>
	</div>
  
  <!-- Filtro do Protocolo -->
  @include('oferta.extras.filtroprotocolo')

  <!-- Protocolos -->
  @if(count($protocolos))
	<div class="row">
      <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">
                  Protocolos
              </header>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nº Protocolo</th>
                      <th>UF</th>
                      <th>Município</th>
                      <th>IF</th>
                      <th>UH Contratadas</th>
                      <th>Oferta</th>
                      <th>Modalidade</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($protocolos as $protocolo)
                    <tr>
                      <td>
                      <a href='{{ url("/oferta/protocolo/$protocolo->id") }}'>{{ $protocolo->txt_protocolo }}</a>
                      </td>
                      <td>{{ $protocolo->municipio->uf->ds_uf }}</td>
                      <td>{{ $protocolo->municipio->ds_municipio }}</td>
                      
                      <td>
                      @foreach($protocolo->instituicoes as $instituicao)
                        {{ $instituicao->txt_nome_if }}
                      @endforeach
                      </td>
                      <td>{{ $protocolo->num_uh_contratadas }}</td>
                      <td>{{ $protocolo->num_oferta }}</td>
                      <td>{{ $protocolo->modalidade->txt_modalidade }}</td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>

          </section>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-9 col-sm-offset-2 col-xs-offset-1">
      {{ $protocolos->links() }}
    </div>
  </div>
  

@else

  <div class="alert alert-block alert-danger fade in">
      <button data-dismiss="alert" class="close close-sm" type="button">
          <i class="icon-remove"></i>
      </button>
      <strong>Nenhum protocolo encontrado!</strong> Não existem protocolos disponíveis com esta configuração de filtro. Favor refaça sua pesquisa.
  </div> 
@endif

@endsection

@section('scripts.footer')
    <!-- Script AngularJS do Filtro -->
    <script src="{{ URL::asset('js/angular/FiltroProtocoloController.js') }}"></script>
@endsection



