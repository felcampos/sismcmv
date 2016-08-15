angular.module('sismcmv')
  .controller('FiltroProtocoloController', ['$scope','$http', function($scope, $http) {

    $scope.estados = [];
    $scope.municipios = [];
    $scope.instituicoes = [];
    $scope.tituloMunicipio = "Filtre o Estado";
    $scope.estadoSelecionado = false;

    $scope.filtro = {
      estado: '',
      municipio: '',
      instituicao: '',
      oferta: ''
    };

    $scope.valorEstado = function(estado) {     
      if(estado){
        $scope.filtro.estado = String(estado);
        $scope.buscarMunicipios(estado);
        $scope.estadoSelecionado = true;
      }
    }

    $scope.valorMunicipio = function(municipio) {     
      if(municipio){
        $scope.filtro.municipio = String(municipio);
      }
    }

    $scope.valorInstituicao = function(instituicao) {     
      if(instituicao){
        $scope.filtro.instituicao = String(instituicao);
      }
    }

    $scope.valorOferta = function(oferta) {     
      if(oferta){
        $scope.filtro.oferta = String(oferta);
      }
    }  

    // Buscar Estados
    $http.get('/api/estados').success(function(estados) {
      $scope.estados = estados;
    });

    // Buscar Instituições financeiras
    $http.get('/api/instituicoes').success(function(instituicoes) {
      $scope.instituicoes = instituicoes;
    });

    // Ao selecionar o Estado, buscar os municípios no BD
    $scope.buscarMunicipios = function(estado) {
      if(!estado)
      {
         $scope.tituloMunicipio = "Filtre o Estado"; 
         $scope.filtro.municipio = "";
         $scope.estadoSelecionado = false;
      } else {
        $scope.tituloMunicipio = "Todos os Municípios"; 
        $scope.filtro.municipio = ""; 
        $http.get('/api/municipios/' + estado ).success(function(municipios) {
        $scope.municipios = municipios;
        $scope.estadoSelecionado = true;
      });
      }
      
    }

  }]);