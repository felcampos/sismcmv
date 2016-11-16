@extends('layouts.app')

@section('conteudo')
  
	<!-- cabeçalho da pagina -->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>Protocolo Nº {{ $protocolo->txt_protocolo }}</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href='{{ url("/") }}'>Inicio</a></li>
				<li><i class="icon_house_alt"></i>Oferta Pública</li>
				<li><i class="fa fa-file-text-o"><a href='{{ url("/oferta/protocolos") }}'></i>Protocolos</a></li>
				<li><i class="fa fa-file-text-o"></i>Nº {{ $protocolo->txt_protocolo }}</li>
			</ol>
		</div>
	</div>
	
	<!-- profile -->
      <div id="profile" class="tab-pane">
        <section class="panel">
          <!-- <div class="bio-graph-heading">
                    Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
          </div> -->
          <div class="panel-body bio-graph-info">
              <h1>Protocolo Nº {{ $protocolo->txt_protocolo }}</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>UF </span>: {{ $protocolo->municipio->uf->ds_uf }} </p>
                  </div>
                  <div class="bio-row">
                      <p>
                      <span>IF </span>: 
                      @foreach($protocolo->instituicoes as $instituicao)
                      {{ $instituicao->txt_nome_if }}
                      @endforeach
                      </p>
                  </div>
                  <div class="bio-row">
                      <p><span>Município </span>: {{ $protocolo->municipio->ds_municipio }}</p>
                  </div>                                              
                  <div class="bio-row">
                      <p><span>UH Contratadas </span>: {{ $protocolo->num_uh_contratadas }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Oferta </span>: {{ $protocolo->num_oferta }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Modalidade </span>: {{ $protocolo->modalidade->txt_modalidade }}</p>
                  </div>
              </div>
          </div>
        </section>
          <section>
              <div class="row">                                              
              </div>
          </section>
      </div>

  <!-- Protocolos -->
	<div class="row">
      <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">
                  Contratos
              </header>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nº Contrato</th>
                      <th>Nome Titular</th>
                      <th>% de obra</th>
                      <th>Possui restrição?</th>
                      <th>Recursos devolvidos?</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contratos as $contrato)
                    <tr>
                      <td>
                      <a href='{{ url("/oferta/contrato/$contrato->id") }}'>{{ $contrato->txt_contrato }}</a>
                      </td>

                      @foreach($contrato->beneficiarios as $bene)
                        @if($bene->bln_ativo)
                          <td>
                          <a href='{{ url("/oferta/beneficiario/$bene->id") }}'>
                          {{ucwords(strtolower(  $bene->txt_nome_beneficiario ))}}
                          </a></td>
                        @endif
                      @endforeach

                       <td>{{  number_format($contrato->vlr_percentual_obra, 2)  }}
                       </td>

					            @if($contrato->bln_restricao)
                      	<td>Sim</td>
                      @else
                      	<td>Não</td>
                      @endif

                      @if($contrato->bln_recurso_devolvido)
                      	<td>Sim</td>
                      @else
                      	<td>Não</td>
                      @endif

                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>

          </section>
      </div>
  </div>

@endsection