<?php 

//Variaveis para poder colocar dentro da URL()
$protocoloID = $contrato->protocolo->id;

?>

@extends('layouts.app')

@section('conteudo')

	<!-- cabeçalho da pagina -->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>Contrato Nº {{ $contrato->txt_contrato }}</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href='{{ url("/") }}'>Inicio</a></li>
				<li><i class="icon_house_alt"></i>Oferta Pública</li>
				<li><i class="fa fa-file-text-o"><a href='{{ url("/oferta/protocolos") }}'></i>Protocolos</a></li>
				<li><i class="fa fa-file-text-o"></i><a href='{{ url("/oferta/protocolo/$protocoloID") }}'>Nº {{ $contrato->protocolo->txt_protocolo }}</a></li>
        <li><i class="fa fa-file-text-o"></i>Contrato Nº {{ $contrato->txt_contrato }}</li>
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
              <h1>Contrato Nº {{ $contrato->txt_contrato }}</h1>
              <div class="row">

                  <div class="bio-row">
                      <p><span>% de Obra </span>: {{  number_format($contrato->vlr_percentual_obra, 2)  }}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>UF </span>: {{ $contrato->protocolo->municipio->uf->ds_uf }} </p>
                  </div>

                  <div class="bio-row">
                      <p>
                      <span>IF </span>: 
                      {{ $contrato->instituicao->txt_nome_if }}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Município </span>: {{ $contrato->protocolo->municipio->ds_municipio }}</p>
                  </div>                                              
                  <div class="bio-row">
                      <p><span>Oferta </span>: {{ $contrato->protocolo->num_oferta }}</p>
                  </div>

                  <div class="bio-row">
                      <p><span>Modalidade </span>: {{ $contrato->protocolo->modalidade->txt_modalidade }}</p>
                  </div>

                  <div class="bio-row">
                      <p><span>Nome Titular </span>: @foreach($contrato->beneficiarios as $bene)
                        @if($bene->bln_ativo)
                          <a href='{{ url("/oferta/beneficiario/$bene->id") }}'>{{ucwords(strtolower(  $bene->txt_nome_beneficiario ))}}</a>
                        @endif
                      @endforeach</p>
                  </div>

                  <div class="bio-row">
                      <p><span>Houve Substituicao? </span>: 
                      @if($contrato->bln_substituido)
                      Sim
                      @else
                      Não
                      @endif
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Possui Restrição? </span>: 
                      @if($contrato->bln_restricao)
                      Sim
                      @else
                      Não
                      @endif
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Recursos Devolvidos? </span>: 
                      @if($contrato->bln_recurso_devolvido)
                      Sim
                      @else
                      Não
                      @endif
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Habite-se? </span>: 
                      @if($contrato->bln_termo_habitese)
                      Sim
                      @else
                      Não
                      @endif
                      </p>
                  </div>

              </div>
          </div>
        </section>
          <section>
              <div class="row">                                              
              </div>
          </section>
      </div>
	
	

@endsection