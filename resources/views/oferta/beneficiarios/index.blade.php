<?php 

//Variaveis para poder colocar dentro da URL()
$contratoID = $beneficiario->contrato->id;
$protocoloID = $beneficiario->contrato->protocolo->id;

?>


@extends('layouts.app')

@section('conteudo')

	<!-- cabeçalho da pagina -->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-user-md"></i>{{ucwords(strtolower(  $beneficiario->txt_nome_beneficiario ))}}</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href='{{ url("/") }}'>Inicio</a></li>
				<li><i class="icon_house_alt"></i>Oferta Pública</li>
				<li><i class="fa fa-file-text-o"><a href='{{ url("/oferta/protocolos") }}'></i>Protocolos</a></li>
				<li><i class="fa fa-file-text-o"></i><a href='{{ url("/oferta/protocolo/$protocoloID") }}'>Nº {{ $beneficiario->contrato->protocolo->txt_protocolo }}</a></li>
        <li><i class="fa fa-file-text-o"></i><a href='{{ url("/oferta/contrato/$contratoID") }}'>Contrato Nº {{ $beneficiario->contrato->txt_contrato }}</a></li>
        <li><i class="fa fa-user-md"></i>Beneficiário: {{ucwords(strtolower(  $beneficiario->txt_nome_beneficiario ))}}</li>
			</ol>
		</div>
	</div>

  <!-- Dados Pessoais -->
      <div id="profile" class="tab-pane">
        <section class="panel">
          <div class="panel-body bio-graph-info">
              <h1>Dados Pessoais</h1>
              <div class="row">

                  <div class="bio-row">
                      <p><span>Nome: </span>: 
                      {{ucwords(strtolower(  $beneficiario->txt_nome_beneficiario ))}}
                      </p>
                  </div>    

                  <div class="bio-row">
                      <p><span>NIS </span>: {{  $beneficiario->txt_nis_beneficiario  }}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>CPF </span>: {{  $beneficiario->txt_cpf_beneficiario  }}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Nascimento </span>: {{  date('d/m/Y', strtotime($beneficiario->dte_nascimento_beneficiario)) }}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Sexo </span>: 
                      {{$beneficiario->genero->txt_genero}}

                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Estado Civil </span>: 
                     {{ $beneficiario->estado_civil->txt_estado_civil}}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Deficiente </span>: 
                      @if($beneficiario->bln_deficiente)
                        Sim
                      @else
                        Não
                      @endif
                      </p>
                  </div>

                  @if($beneficiario->bln_deficiente)
                  <div class="bio-row">
                      <p><span>Tipo Deficiência</span>: {{  $beneficiario->txt_tipo_deficiencia  }}</p>
                  </div>
                  @endif

                  <div class="bio-row">
                      <p><span>Idoso(a) </span>: 
                      @if($beneficiario->bln_idoso)
                        Sim
                      @else
                        Não
                      @endif
                      </p>
                  </div>

                  @if($beneficiario->genero_id == 1)
                  <div class="bio-row">
                      <p><span>Chefe de Família </span>: 
                      @if($beneficiario->bln_mulher_chefe)
                        Sim
                      @else
                        Não
                      @endif
                      </p>
                  </div>
                  @endif
                  
                  @if($beneficiario->municipio)
                  <div class="bio-row">
                      <p><span>Estado </span>: {{  $beneficiario->municipio->uf->ds_uf  }}</p>
                  </div> 

                  <div class="bio-row">
                      <p><span>Município </span>: {{  $beneficiario->municipio->ds_municipio  }}</p>
                  </div> 
                  @endif
                  
                  @if($beneficiario->estado_civil->id == 6)
                  <div class="bio-row">
                      <p><span>Renda Familiar Bruta R$</span>: {{  $beneficiario->vlr_renda_familiar_bruta  }}</p>
                  </div>
                  @endif



              </div>
          </div>
      </div>

      <!-- Dados Contratuais -->
      <div id="profile" class="tab-pane">
        <section class="panel">
          <div class="panel-body bio-graph-info">
              <h1>Dados Contratuais</h1>
              <div class="row">

                  <div class="bio-row">
                      <p>
                      <span>Contrato </span>: 
                      <a href='{{ url("/oferta/contrato/$contratoID") }}'>
                      {{  $beneficiario->contrato->txt_contrato  }}
                      </a>
                      </p>
                  </div> 

                  <div class="bio-row">
                      <p><span>Data Assinatura </span>: {{  date('d/m/Y', strtotime($beneficiario->dte_assinatura_contrato)) }}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p>
                      <span>% de execução </span>: 
                      {{  number_format($beneficiario->contrato->vlr_percentual_obra, 2)  }}
                      </p>
                  </div>

                  <div class="bio-row">
                      <p>
                      <span>Titular </span>: 
                      @if($beneficiario->bln_ativo)
                        Sim
                      @else
                        Não
                      @endif
                      </p>
                  </div>
                  

                  @if(! $beneficiario->bln_ativo)
                  <div class="bio-row">
                      <p><span>Nome do Titular </span>: 
                      @foreach($beneficiario->contrato->beneficiarios as $bene)
                        @if($bene->bln_ativo)
                          <a href='{{ url("/oferta/beneficiario/$bene->id") }}'>{{ucwords(strtolower(  $bene->txt_nome_beneficiario ))}}</a>
                        @endif
                      @endforeach</p>
                  </div>
                  @endif

              </div>
          </div>
      </div>

      <!-- Dados Residenciais -->
      <div id="profile" class="tab-pane">
        <section class="panel">
          <div class="panel-body bio-graph-info">
              <h1>Dados Residenciais</h1>
              <div class="row">
                  
                  @if($beneficiario->municipio)
                  <div class="bio-row">
                      <p><span>Estado </span>: {{  $beneficiario->municipio->uf->ds_uf  }}</p>
                  </div> 
                  
                  
                  <div class="bio-row">
                      <p><span>Município </span>: {{  $beneficiario->municipio->ds_municipio  }}</p>
                  </div>
                  @endif

                  <div class="bio-row">
                      <p><span>Endereço Atual </span>: {{  $beneficiario->txt_endereço_atual  }}</p>
                  </div>

                  <div class="bio-row">
                      <p><span>Área de Risco </span>: 
                      @if($beneficiario->bln_area_risco)
                        Sim
                      @else
                        Não
                      @endif
                      </p>
                  </div> 

              </div>
          </div>
      </div>

      <!-- Dados Familiares -->
      @if($beneficiario->estado_civil->id != 6)
      <div id="profile" class="tab-pane">
        <section class="panel">
          <div class="panel-body bio-graph-info">
              <h1>Dados Familiares</h1>
              <div class="row">

                  <div class="bio-row">
                      <p><span>Nome Conjuge </span>: {{  ucwords(strtolower($beneficiario->txt_nome_conjuge))  }}</p>
                  </div> 

                  <div class="bio-row">
                      <p><span>CPF Conjuge </span>: {{  $beneficiario->txt_cpf_conjuge  }}</p>
                  </div>
                  
                  @if($beneficiario->dte_nascimento_conjuge)
                  <div class="bio-row">
                      <p><span>Nascimento Conjuge </span>: {{  date('d/m/Y', strtotime($beneficiario->dte_nascimento_conjuge)) }}
                      </p>
                  </div>
                  @endif

                 <div class="bio-row">
                      <p><span>Sexo Conjuge</span>: 
                      @if($beneficiario->genero_conjuge_id == 1)
                        Feminino
                      @elseif ($beneficiario->genero_conjuge_id == 2)
                        Masculino
                      @endif
                      </p>
                  </div>

                  <div class="bio-row">
                      <p><span>Renda Familiar Bruta R$</span>: {{  $beneficiario->vlr_renda_familiar_bruta  }}</p>
                  </div>

                  <div class="bio-row">
                      <p>
                      <span>Familiar Deficiente</span>:  @if($beneficiario->bln_deficiente_familia)
                        Sim
                      @else
                        Não
                      @endif
                      </p>
                  </div>

                  @if($beneficiario->bln_deficiente_familia)
                  <div class="bio-row">
                      <p><span>Tipo Deficiência</span>: {{  $beneficiario->txt_tipo_deficiencia  }}</p>
                  </div>
                  @endif

              </div>
          </div>
      </div>
      @endif

	
	

@endsection