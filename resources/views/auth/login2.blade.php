<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISMCMV - Login</title>

    <!-- Bootstrap CSS -->    
    <link href="_css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="_css/bootstrap-theme.css" rel="stylesheet">

    <!-- font icon -->
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,800' rel='stylesheet' type='text/css'>
    <link href="_css/elegant-icons-style.css" rel="stylesheet" />
    <link href="_css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles -->
    <link href="_css/login.css" rel="stylesheet">
    <link href="_css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

    <h1 id="titulo">SISMCMV</h1>

      <form class="login-form" action="index.html">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Senha">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Lembrar De Mim
                <span class="pull-right"> <a href="#"> Esqueceu Sua Senha?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Solicitar Acesso</button>
        </div>
      </form>

    </div>


  </body>
</html>