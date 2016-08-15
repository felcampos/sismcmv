<?php

namespace App\Http\Middleware;

use Closure;

class AcessarPerfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $usuario;

    public function handle($request, Closure $next)
    {
        $this->usuario = $this->formatarUsuarioDaUrl($request);

        if(\Auth::user() && \Auth::user()->name == $this->usuario) { 
            return $next($request); 
        } 

        if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
        }

        return response('Você não tem permissão para acessar este perfil.', 403);
         
    }

    // formatarUsuarioDaUrl metodo.
    protected function formatarUsuarioDaUrl($request)
    {
       // Captar o nome colocado na url para verificar com o usuario logado.
        $posicaoPerfil = strpos($request->url(), 'perfil');
        $nomeUsuarioUrl = substr($request->url(), $posicaoPerfil + 7);
        $nomeUsuarioUrlFormatado = str_replace('-', ' ', $nomeUsuarioUrl);

        return $nomeUsuarioUrlFormatado;
    } 
}
