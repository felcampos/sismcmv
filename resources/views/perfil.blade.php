@extends('layouts.app')

@section('scripts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
@endsection

@section('conteudo')
	
	<!-- cabeçalho da pagina -->
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-user-md"></i> Perfil</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{{url('/')}}">Início</a></li>
				<li><i class="icon_documents_alt"></i>Paginas</li>
				<li><i class="fa fa-user-md"></i>Perfil</li>
			</ol>
		</div>
	</div>

	
	<div class="row">
	<!-- profile-widget -->
	    <div class="col-lg-12">
	        <div class="profile-widget profile-widget-info">
	              <div class="panel-body">
	                <div class="col-lg-2 col-sm-2">
	                  <h4>{{ $usuario->name }}</h4>               
	                  <div class="follow-ava">
	                      <img src='{{ url("$usuario->txt_caminho_foto")}}' alt="Avatar {{ $usuario->name }}">
	                  </div>
	                 <h6>{{ $usuario->tipoUsuario->txt_tipo_usuario }}</h6>
	                </div>
	                <div class="col-lg-4 col-sm-4 follow-info">
	                    <p>Membro desde {{  date('d/m/Y',strtotime($usuario->created_at))}}</p>
	                    <p>{{ $usuario->email }}</p>
	                    @if($usuario->setor)
							<p>
							<i class="fa fa-home"> {{ $usuario->setor->txt_setor }}</i>
							</p>
						@endif
	                    <h6>
	                        <span><i class="icon_clock_alt"></i>
								{{  date('H:i') }}
	                        </span>
	                        <span><i class="icon_calendar"></i>
	                        	{{  date('d.m.y')}}
	                        </span>
	                        <span><i class="icon_pin_alt"></i>NY</span>
	                    </h6>
	                </div>

						                                         
                                
				
                      	
					<!-- <div class="col-lg-2 col-sm-6 follow-info weather-category">
	                          <ul>
	                              <li class="active">
	                                  
	                                  <i class="fa fa-bell fa-2x"> </i><br>
									  
									  Contrary to popular belief, Lorem Ipsum is not simply 
	                              </li>
								   
	                          </ul>
	                </div>
					<div class="col-lg-2 col-sm-6 follow-info weather-category">
	                          <ul>
	                              <li class="active">
	                                  
	                                  <i class="fa fa-tachometer fa-2x"> </i><br>
									  
									  Contrary to popular belief, Lorem Ipsum is not simply
	                              </li>
								   
	                          </ul>
	                </div> -->
	              </div> <!-- fim panel body -->
	        </div> <!-- profile widget -->
	    </div> <!-- col-lg-12 -->
	  </div> <!-- row -->
		
<!-- page start-->
      <div class="row">
         <div class="col-lg-12">
            <section class="panel">
                  <header class="panel-heading tab-bg-info">
                      <ul class="nav nav-tabs">
                          <!-- <li>
                              <a data-toggle="tab" href="#recent-activity">
                                  <i class="icon-home"></i>
                                  Demandas
                              </a>
                          </li> -->
                          <li class="active">
                              <a data-toggle="tab" href="#profile">
                                  <i class="icon-user"></i>
                                  Perfil
                              </a>
                          </li>
                          <li class="">
                              <a data-toggle="tab" href="#edit-profile">
                                  <i class="icon-envelope"></i>
                                  Editar Perfil
                              </a>
                          </li>
                      </ul>
                  </header>
                  <div class="panel-body">
                      <div class="tab-content">
                          <!-- <div id="recent-activity" class="tab-pane">
                              <div class="profile-activity">                                          
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Jonatanh Doe</a> at 4:25pm, 30th Octmber 2014</p>
                                              <p>It is a long established fact that a reader will be distracted layout</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Jhon Loves </a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Knowledge speaks, but wisdom listens.</p>                                                      
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Rose Crack</a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Jimy Smith</a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Knowledge speaks, but wisdom listens.</p>                                                      
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="act-time">                                      
                                      <div class="activity-body act-in">
                                          <span class="arrow"></span>
                                          <div class="text">
                                              <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                              <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div> -->
                          <!-- profile -->
                          <div id="profile" class="tab-pane active">
                            <section class="panel">
                              <!-- <div class="bio-graph-heading">
                                        Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                              </div> -->
                              <div class="panel-body bio-graph-info">
                                  <h1>Perfil </h1>
                                  <div class="row">
                                      <div class="bio-row">
                                          <p><span>Nome: </span>{{ $usuario->name}}</p>
                                      </div>
                                      <div class="bio-row">
                                          <p><span>Email:  </span>{{ $usuario->email}}</p>
                                      </div>                                              
                                      <div class="bio-row">
                                          <p>
                                          <span>Tipo Usuário: </span>{{ $usuario->tipousuario->txt_tipo_usuario}}
                                          </p>
                                      </div>

                                      
                                      <div class="bio-row">
                                          <p>

                                          <span>Cargo </span>
										  @if($usuario->cargo)
                                          	{{ $usuario->cargo->txt_cargo}}
                                          @endif
                                          </p>
                                      </div>
                                     

                                      <div class="bio-row">
                                          <p>

                                          <span>Setor </span>
										  @if($usuario->setor)
                                          	{{ $usuario->setor->txt_setor}}
                                          @endif
                                          </p>
                                      </div>

                                      <div class="bio-row">
                                          <p><span>Email Pessoal: </span>{{ $usuario->txt_email_particular}}</p>
                                      </div>
                                      <div class="bio-row">
                                          <p>
                                          <span>
                                          Nascimento: 
                                          </span>
										  @if($usuario->dte_nascimento)
                                          	{{ date('d/m/Y',strtotime($usuario->dte_nascimento) ) }}
                                          @endif

                                          </p>
                                      </div>
                                      <div class="bio-row">
                                          <p>
                                          <span>Telefone: </span>{{ $usuario->txt_telefone_residencial }}
                                          </p>
                                      </div>
                                      <div class="bio-row">
                                          <p>
                                          <span>Celular: </span>{{ $usuario->txt_celular }}
                                          </p>
                                      </div>
                                      <div class="bio-row">
                                          <p><span>Ramal: </span>{{ $usuario->txt_ramal }}</p>
                                      </div>
                                      <div class="bio-row">
                                          <p>
                                          <span>
                                          Membro Desde:
                                          </span>  
                                          {{  date('d/m/Y',strtotime($usuario->created_at))}}
                                          </p>
                                      </div>
                                      <div class="bio-row">
                                          <p>
                                          <span>
                                          Atualizado em:
                                          </span>  
                                          {{  date('d/m/Y',strtotime($usuario->updated_at))}}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                            </section>
                              
                          </div>
                          <!-- edit-profile -->
                          <div id="edit-profile" class="tab-pane">
                            <section class="panel">                                          
                                  <div class="panel-body bio-graph-info">
                                      <h1> Editar Perfil</h1>
                                      
                                      <form class="form-horizontal" role="form">                                                  
                                          <div class="form-group">
                                              <label class="col-lg-1 control-label">Nome</label>
                                              <div class="col-lg-5">
                                                  <input type="text" class="form-control" id="name" 
                                                  placeholder="{{ $usuario->name }}" value="{{ old('name') }}">
                                              </div>

                                              <label class="col-lg-1 control-label">Email</label>
                                              <div class="col-lg-5">
                                                  <input type="email" class="form-control" id="email" 
                                                  placeholder="{{ $usuario->email}}" value="{{ old('email') }}">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="col-lg-1 control-label">Nascimento</label>
                                              <div class="col-lg-5">
                                                  <input type="text" class="form-control" id="dte_nascimento" 
                                                  name="dte_nascimento"
                                                  placeholder="{{ $usuario->dte_nascimento}}" value="{{ old('dte_nascimento') }}">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="col-lg-2 control-label">Country</label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="c-name" placeholder=" ">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-lg-2 control-label">Birthday</label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="b-day" placeholder=" ">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-lg-2 control-label">Occupation</label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="occupation" placeholder=" ">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-lg-2 control-label">Email</label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="email" placeholder=" ">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-lg-2 control-label">Mobile</label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="mobile" placeholder=" ">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-lg-2 control-label">Website URL</label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <div class="col-lg-offset-2 col-lg-10">
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                                  <button type="button" class="btn btn-danger">Cancel</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
              </section>
         </div>
      </div>
      <!-- page end-->

        <form 
			id="mudarFotoPerfil" 
			action='{{ url("/perfil/foto")}}' method="post" 
			class="col-md-2 form-horizontal dropzone">
			{{ csrf_field() }}
			{{method_field('patch')}}
		</form>


    
@endsection

@section('scripts.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

	<script>

		//Dropzone nos da acesso ao objeto global para especificar as opções de acordo com o id da form
		Dropzone.options.mudarFotoPerfil = {
			paramName: 'photo',
			maxFilesize: 3, // em MB
			acceptedFiles: '.jpg, .jpeg, .png, .bpm',
			dictDefaultMessage: 'Clique aqui ou arraste uma foto para mudar sua foto de perfil',
			dictFileTooBig: 'Arquivo acima de 3MB não são permitidos',
			dictInvalidFileType: 'Tipo de arquivo inválido',
			maxFiles:1,
			init: function() {
        this.on("success", function(file, responseText) {
            location.reload(); //Reloadar a pagina após salvar a imagem
        });
      }  
		}
	</script>
	
@endsection