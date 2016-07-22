@extends('layouts.layout')

@section('conteudo')
<div class="login-img3-body">
    <div class="container">

      <form class="login-form" role="form" method="POST" action="{{ url('/password/email') }}">  
        {{ csrf_field() }}      
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-recycle" aria-hidden="true"></i> Resetar Senha</p>

            @if (session('status'))
                <div class="alert alert-success fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                      <i class="icon-remove"></i>
                  </button>
                    {{ session('status') }}
              </div> 
            @endif

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

            <button class="btn btn-primary btn-lg btn-block" type="submit">
                <i class="fa fa-btn fa-envelope"></i> Enviar Link Para Resetar Senha
            </button>
            
        </div>
      </form>

    </div>
</div>
    

@endsection