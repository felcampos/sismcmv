@extends('layouts.layout')

@section('conteudo')
<div class="login-img3-body">
    <div class="container">

      <form class="login-form" role="form" method="POST" action="{{ url('/register') }}">  
        {{ csrf_field() }}  

        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-user" aria-hidden="true"></i> Registrar Usuário</p>

            <div class="help-parent">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            <div class="input-group form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome">       
            </div>


            <div class="help-parent">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>
            <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">       
            </div>
             
            @if ($errors->has('password'))
            <div class="help-parent">
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            </div>
            @endif
            <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Nova Senha" autofocus>
            </div>

            @if ($errors->has('password_confirmation'))
            <div class="help-parent">
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            </div>
            @endif
            <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha" autofocus>
            </div>

             
            <button class="btn btn-primary btn-lg btn-block" type="submit">
                <i class="fa fa-btn fa-user"></i> Registrar Usuário
            </button>

        </div>
      </form>

    </div>
</div>
    

@endsection