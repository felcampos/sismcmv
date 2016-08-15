<?php

namespace App\Providers;

use App\Uf;
use App\Instituicao;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {       
        $this->EnviarUsuarioAutenticado();    
        $this->EnviarEstados();
        $this->EnviarInstituicoes();    
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    // EnviarUsuarioAutenticado metodo.
    public function EnviarUsuarioAutenticado()
    {
       //Enviar a variável usuário para todas as views;
        view()->composer('*', function ($view) {

          $usuario =  \Auth::user();
          if($usuario) 
          {
            $usuario->load('tipoUsuario', 'setor.departamento', 'cargo');
          }
          
          $view->with('usuario', $usuario);

        });
    }

    public function EnviarEstados()
    {
       //Enviar a variável usuário para todas as views;
        view()->composer('oferta.*', function ($view) {

          $estados =  Uf::orderBy('ds_uf')->get();
          
          $view->with('estados', $estados);

        });
    } 

    public function EnviarInstituicoes()
    {
       //Enviar a variável usuário para todas as views;
        view()->composer('oferta.*', function ($view) {

          $instituicoes =  Instituicao::orderBy('txt_nome_if')->get();
          
          $view->with('instituicoes', $instituicoes);

        });
    } 
}
