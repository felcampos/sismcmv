@extends('layouts.app')

@section('conteudo')

    <!-- cabeçalho da pagina -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>Siscasa</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href='{{ url("/") }}'>Inicio</a></li>
                <li><i class="fa fa-laptop"></i>SisCasa</li>
            </ol>
        </div>
    </div>

    <!-- inicio do conteúdo -->
    <div class="row">
        <div class="col-lg-12">
            <h1>Você está loggado!!</h1>
        </div>
    </div>
    <!-- fim do conteúdo -->

    

@endsection
