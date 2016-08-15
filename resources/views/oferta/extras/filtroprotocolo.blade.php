<!-- Formulário Filtro -->
<div class="row" ng-controller="FiltroProtocoloController">

    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Filtro
            </header>
            <div class="panel-body">
                <form id="filtrarProtocolo" class="form-inline" method="get" action='{{url("/oferta/protocolos/filtro")}}'>

                    <div class="form-group">
                        <label class="sr-only" for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control" ng-model="filtro.estado" ng-change="buscarMunicipios(filtro.estado)" ng-init="valorEstado({{ session('estado') ? session('estado') : '' }})">
                            <option value="">Todos os Estados:</option>
                            <option ng-repeat="estado in estados" 
                            value="@{{ estado.id }}">
                            @{{ estado.ds_uf }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="municipio">Município</label>
                        <select id="municipio" name="municipio" ng-model="filtro.municipio" class="form-control" ng-init="valorMunicipio({{ session('municipio') ? session('municipio') : '' }})"
                        ng-disabled="!estadoSelecionado" >
                            <option 
                            value="" ng-bind="tituloMunicipio">Atualizando...</option>
                            <option ng-repeat="municipio in municipios" 
                            value="@{{ municipio.id}}">
                            @{{ municipio.ds_municipio }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="oferta">Oferta</label>
                        <select id="oferta" name="oferta" class="form-control" ng-model="filtro.oferta" ng-init="valorOferta({{ session('oferta') ? session('oferta') : '' }})">
                            <option value="">2009 e 2012</option>
                            <option value="2009">2009</option>
                            <option value="2012">2012</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="oferta">Instituição Financeira</label>
                        <select id="instituicao" ng-model="filtro.instituicao" name="instituicao" class="form-control" ng-init="valorInstituicao({{ session('instituicao') ? session('instituicao') : '' }})">
                            <option value="">Todas as IFs:</option>
                            <option ng-repeat="instituicao in instituicoes" 
                            value="@{{ instituicao.id }}">
                            @{{ instituicao.txt_nome_if }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group pull-right">
                      <button type="submit" class="btn btn-primary">Filtrar</button>                      
                      <a href='{{ url("/oferta/protocolos") }}' type="submit" class="btn btn-default">Zerar Filtro</a>
                    </div>

                </form>

            </div>
        </section>

    </div>
</div>

