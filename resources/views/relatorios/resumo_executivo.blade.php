@extends('layouts.app')

@section('conteudo')

	<!-- cabeçalho da pagina -->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-file-text-o"></i>Resumo Executivo</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href='{{ url("/") }}'>Inicio</a></li>
				<li><i class="icon_document_alt"></i>Relatórios</li>
				<li><i class="fa fa-file-text-o"></i>Resumo Executivo</li>
			</ol>
		</div>
	</div>

	<!-- inicio do conteúdo -->
	 Pagina Resumo
	<!-- fim do conteúdo -->
	
@endsection