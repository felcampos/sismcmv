@extends('layouts.layout')

@section('conteudo')
<div class="login-img3-body">
    <div class="container">

      <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">  
        {{ csrf_field() }}      
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <div class="help-parent">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>
            <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>       
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
                <input id="password" type="password" class="form-control" name="password" placeholder="Senha">
            </div>

             

            <label class="checkbox">
                <input type="checkbox" name="remember"> Lembrar De Mim
                <span class="pull-right"> <a href="{{ url('/password/reset') }}"> Esqueceu Sua Senha?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Solicitar Acesso</button>
        </div>
      </form>

    </div>
</div>
    

@endsection