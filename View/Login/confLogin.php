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

        <?php
        include '../../Model/Login.php';
        include '../../Controller/LoginController.php';

        $login = new Login();
        $loginController = new LoginController();

        $login->setEmail($_POST['emailUsuario']);
        $login->setSenha($_POST['senhaUsuario']);

        $loginController->Login($login);


        if ($_SESSION['erroLogin'] != NULL) {
            echo '<script>alert("' . $_SESSION['erroLogin'] . '"); window.location.href="http://localhost/GameLand/View/Login/login.html"</script>';
        }
        ?>

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
                            <a class="nav-link js-scroll-trigger" href="../../View/Cadastro/cadastro.html">Informações Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../View/Compra/carrinhoDeCompras.html">carrinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../../index.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase">
                            <strong>O Console quebrou ? Nós damos um jeito :D</strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p class="text-faded mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis arcu facilisis, ultrices quam sit amet, consequat purus. Phasellus posuere</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#sobre">Sobre</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="sobre">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading text-white">Nós temos oque você procura</h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4">Temos todos os tipos de consoles para você se divertir em qualquer lugar a qualquer hora Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#categorias">Categorias</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0" id="categorias">
            <div class="container-fluid p-0">
                <div class="row no-gutters popup-gallery">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box-1" href="servicos.html#playstation">
                            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded"></div>
                                    <div class="project-name">
                                        Playstation
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box-2" href="servicos.html#xbox">
                            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded"></div>
                                    <div class="project-name">
                                        Microsoft
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box-3" href="servicos.html#switch">
                            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded"></div>
                                    <div class="project-name">
                                        Nintendo
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading">Entre em Contato Conosco</h2>
                        <hr class="my-4">
                        <p class="mb-5">Entre em contato pelo telefone ou e-mail.<br>
                            Entraremos em contato assim que possível.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                        <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                        <p>(11) 99527-1266</p>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                        <p>
                            <a href="mailto:your-email@your-domain.com">contato@gameland.com.br</a>
                        </p>
                    </div>
                </div>
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