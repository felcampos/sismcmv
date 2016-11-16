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

  <!-- Dados Gerais do Contrato -->
      <div id="profile" class="tab-pane">
        <section class="panel">
          <div class="panel-body bio-graph-info">
              <h1>Dados Gerais</h1>
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
      </div>
      
      <!-- Dados Pagamento -->
      <div class="row">
      <div class="col-lg-12">
              <section class="panel">
                  <header class="panel-heading">
                      Pagamentos
                  </header>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Parcela</th>
                          <th>Remessa</th>
                          <th>Nº Nota</th>
                          <th>Valor Subvenção</th>
                          <th>Valor Remuneração</th>
                          <th>Beneficiario</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($pagamentos as $pagamento)
                        <tr>
                          <td>
                          <a href='{{ url("") }}'>{{ $pagamento->num_parcela }}</a>
                          </td>
                          <td>{{ $pagamento->num_remessa }}</td>
                          <td>{{ $pagamento->nota->num_nota_tecnica }}</td>

                          <td>{{ $pagamento->vlr_subvencao }}</td>
                          <td>{{ $pagamento->vlr_remuneracao }}</td>
                          <td>{{ $pagamento->beneficiario->txt_nome_beneficiario }}</td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>

              </section>
          </div>
      </div>
      


      @if($contrato->bln_substituido)
      <!-- Substituições -->
      <div id="profile" class="tab-pane">
        <section class="panel">
          <div class="panel-body bio-graph-info">
              <h1>Substituições</h1>
              <div class="row">
                  
                  @foreach($contrato->beneficiarios as $bene)
                  <div class="bio-row">
                      @if($bene->bln_ativo)
                      <p><span>Nome Titular </span>:
                          <a href='{{ url("/oferta/beneficiario/$bene->id") }}'>{{ucwords(strtolower(  $bene->txt_nome_beneficiario ))}}</a>
                      </p>
                      @else
                      <p><span>Nome Substituído </span>:
                          <a href='{{ url("/oferta/beneficiario/$bene->id") }}'>{{ucwords(strtolower(  $bene->txt_nome_beneficiario ))}}</a>
                      </p>
                      @endif
                  </div>
                  @endforeach


              </div>
          </div>
      </div>
      @endif
	
	

@endsection