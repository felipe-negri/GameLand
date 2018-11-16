<!-- 

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

-->

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Game Land</title>

        <!-- Bootstrap -->
        <link href="../../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="../../resources/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


        <!-- Estilos -->
        <link href="../../css/creative.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../../index.php#page-top">Game Land</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../View/Sobre/sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../index.php#categorias">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../View/Servicos/servicos.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../View/Contato/contato.html">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../View/Login/login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../View/Cadastro/cadastro.html">cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../View/Compra/carrinhoDeCompras.html">carrinho</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="bg-primary" id="confCadastro">
            
            <?php
            include '../../Model/Usuario.php';
            include '../../Controller/UsuarioController.php';

            $atualizaUsuario = new Usuario();
            $usuarioController = new UsuarioController();
            
            $atualizaUsuario->setEmail($_POST['emailUsuario']);
            $atualizaUsuario->setSenha($_POST['confSenha']);
            
            $usuarioController->AlterarSenhaUsuario($atualizaUsuario);
            ?>


            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Sua senha foi alterada com sucesso!!</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">Sua senha foi alterada com sucesso, agora você ja pode solicitar o conserto do seu console. </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="../../View/Login/login.html">Login</a>
            </div>
            
        </section>
        
        <!-- Bootstrap  JavaScript -->
        <script src="../../resources/jquery/jquery.min.js"></script>
        <script src="../../resources/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../../resources/jquery-easing/jquery.easing.min.js"></script>
        <script src="../../resources/scrollreveal/scrollreveal.min.js"></script>

        <script src="../../js/creative.js"></script>

    </body>

</html>