<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'LoginController@index');

Route::auth();

//Route::get('/home', 'HomeController@index');

/*
|----------------------------------------------------------
| Rotas dos relatórios
|----------------------------------------------------------
*/

Route::get('/relatorios/resumo', 'Relatorios\ResumoController@index');

/*
|----------------------------------------------------------
| Rotas da Oferta Pública
|----------------------------------------------------------
*/

Route::get('/oferta/protocolos', 'Oferta\ProtocoloController@index');
Route::get('/oferta/protocolos/filtro', 'Oferta\ProtocoloController@filtrarProtocolo');
Route::get('/oferta/protocolo/{protocolo}', 'Oferta\ProtocoloController@protocolo');

Route::get('/oferta/contrato/{contrato}', 'Oferta\ContratoController@index');
Route::get('/oferta/beneficiario/{beneficiario}', 'Oferta\BeneficiarioController@index');

/*
|----------------------------------------------------------
| Rotas do perfil
|----------------------------------------------------------
*/

Route::get('/perfil', 'PerfilController@index');
Route::patch('/perfil/foto', 'PerfilController@mudarFoto');


/*
|----------------------------------------------------------
| Rotas da api
|----------------------------------------------------------
*/

Route::get('/api/estados', 'FiltroProtocoloController@buscarEstados');
Route::get('/api/municipios/{estado}', 'FiltroProtocoloController@buscarMunicipios');
Route::get('/api/instituicoes', 'FiltroProtocoloController@buscarInstituicoes');
