<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/imagens/favicon_mcmv.ico" type="image/x-icon">
    <link rel="icon" href="/imagens/favicon_mcmv.ico" type="image/x-icon">

    <title>SISCASA - Login</title>

    <!-- Bootstrap CSS -->    
    <link href="/_css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/_css/bootstrap-theme.css" rel="stylesheet">

    <!-- font icon -->
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,800' rel='stylesheet' type='text/css'>
    <link href="/_css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/_css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles -->
    <link href="/_css/style.css" rel="stylesheet">
    <link href="/_css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <img id="logo" src="/imagens/McmvLogoPequena.png" alt="Logo SisCasa">
    <h1 id="titulo">SisCasa</h1>
    <p id="subtitulo">
        Sistema de Monitoramento do<br>Minha&nbsp;Casa&nbsp;Minha&nbsp;Vida
    </p>

    @yield('conteudo')

    <!-- Jquery Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script>
        setTimeout(function() {
            $('.help-block').fadeOut('slow');
        }, 5000); // <-- time in milliseconds 
    </script>
</body>
</html>