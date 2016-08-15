<?php

namespace App\Http\Controllers;

use App\User;
use Image;
use Storage;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\FotoPerfilRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PerfilController extends Controller
{
	protected $diretorioBase = 'imagens/perfil';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('perfil');
    	
    }

    // mudarFoto metodo.
    public function mudarFoto(FotoPerfilRequest $request)
    {
    	$this->criarFoto($request->file('photo'));

        return "Foto salva com sucesso";

    } 

    // criarFoto metodo.
    protected function criarFoto(UploadedFile $file)
    {
    	//buscas o usuario autenticado
    	$user =  $this->VerificarFotoAntiga(\Auth::user());  

        //Criar os nomes corretos de todos os caminhos
        $nomePhoto = 
        str_replace(' ', '-', $user->name . '.' . $file->guessExtension());
        $caminhoPhoto = sprintf("%s/%s", $this->diretorioBase, $nomePhoto);
        $caminhoAvatar = sprintf("%s/avatar-%s", $this->diretorioBase, $nomePhoto);
        
        //mover a foto original do diretório provisório para o definitivo
        $file->move($this->diretorioBase, $nomePhoto);

        //criar a foto menor
        Image::make($caminhoPhoto)
            ->fit(75)
            ->save($caminhoPhoto); // substitui a foto original que foi salva

        //criar o avatar 
        Image::make($caminhoPhoto)
            ->fit(30)
            ->save($caminhoAvatar); // substitui a foto original que foi salva

        // Atualiza o BD com os novos nomes
    	$user->update([
            'txt_nome_foto' => $nomePhoto,
            'txt_caminho_foto' => $caminhoPhoto,
    		'txt_caminho_avatar' =>  $caminhoAvatar,
    	]);
      
    }

    // VerificarFotoAntiga metodo.
    protected function VerificarFotoAntiga(User $user)
    {
       if($user->txt_nome_foto != "anonimo.jpg") {
            Storage::delete("perfil/$user->txt_nome_foto");
            Storage::delete("perfil/avatar-" . $user->txt_nome_foto);
            // Storage::delete($user->txt_caminho_foto);
            // Storage::delete($user->txt_caminho_avatar);

            
        }

        return $user;
    } 

}
