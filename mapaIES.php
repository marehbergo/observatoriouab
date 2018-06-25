<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Observatório UAB</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type="text/javascript" src="functions_v2.js"></script>
        <script type="text/javascript" src="functions_v4.js"></script>

        <script>
            //Seleciona o botão
            var btn = document.getElementById('btn');

            //Adiciona uma chamada quando o elemento (botão no caso) for clicado, chamando a função 'ocultar'
            btn.addEventListener('click', ocultar)

            //Definimos a função a ser chamada quando o botão for clicado
            function ocultar(){
            var msg = document.getElementById('msg'); //  seleciona a div com o texto
            msg.style.display = 'none'; // oculta a div
            //this.style.display = 'none'; // oculta o botão
            }
    </script>
        
    </head>
    <body>
        <div id="body-bg">
            <div id="pre-header" class="container" style="height: 40px">
            <!-- Spacing above header -->
            </div>
            
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/UAB.png" style="height: 80px" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            
            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.html" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <span class="fa-graduation-cap">Cursos</span>
                                    <ul>
                                    <li><a href="mapaIES.php">Buscar Cursos</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fa-copy">Demanda x Oferta</span>
                                    <ul>
                                        <li><a href="pesquisaDemanda.html">Pesquisa de Demanda</a></li>
                                        <li><a href="demandaOferta.php">Cadastro de Oferta</a></li>
                                        <li><a href="mapa.html">Proposta de Oferta</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fa-th">Indicadores</span>
                                    <ul>
                                        <li><a href="dados.html">Dados SisUAB</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fa-font">Análise da Evasão</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            
            <!-- Spacing below header -->
            <div id="post_header" class="container" style="height: 40px"></div>
            <div id="content-top-border" class="container"></div>
            <!-- === END HEADER === -->
            
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <h2>Busca por Cursos:</h2>
                        <div class="col-md-12">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#one" data-toggle="tab">por IPES</a></li>
                                    <li><a href="#two" data-toggle="tab">por Polos</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="one">
                                        <!-- Select IES e cursos -->
                                        <!--<form name="busca" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">-->
                                        
                                        <form name="busca" action="buscaPolo.php" method="POST">
                                            <div class="row margin-top-20">
                                                <div class="col-md-3 col-xs-12">
                                                    <label>IPES:</label>
                                                    <select name="ipes" id="ipes" class="form-control form-control-lg">
                                                        <option value="0">Selecione uma Instituição ... </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 col-xs-10">
                                                    <label>Cursos:</label>
                                                    <select name="cursos" id="cursos" class="form-control form-control-lg">
                                                        <option value="0">Selecione um Curso ... </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-xs-2">
                                                    <!--<button class="btn btn-primary" type="submit" name="btn" style="margin-top: 27px;"><i class="fa fa-search"></i></button>-->
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xs-10">
                                                <br>
                                                <label>Polos:</label>
                                                <div id="polos"></div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="tab-pane" id="two">
                                        <form name="busca" action="buscaCurso.php" method="POST">
                                            <div class="row margin-top-20">
                                                <div class="col-md-3 col-xs-12">
                                                    <label>UF:</label>
                                                    <select name="estados" id="estados" class="form-control form-control-lg">
                                                        <option value="0">Selecione um estado </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 col-xs-10">
                                                    <label>Polo:</label>
                                                    <select name="polo" id="polo" class="form-control form-control-lg">
                                                        <option value="0">Selecione um polo </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-xs-2">
                                                    <!--<button class="btn btn-primary" type="submit" name="btn" style="margin-top: 27px;"><i class="fa fa-search"></i></button>-->
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-10">
                                                <br>
                                                <label>Cursos:</label>
                                                <div id="curso"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <div class="col-md-6 margin-bottom-20">
                            <p>Praça Frei Orlando, 170 - Centro
                                <br> São João del-Rei - MG
                                <br>36307-352</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li><a href="#" target="_blank">Linkedin</a></li>
                                <li><a href="#" target="_blank">Facebook</a></li>
                                <li><a href="#" target="_blank">Contato</a></li>
                            </ul>
                        </div>
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2018 MEBergo</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->

        </div>
    </body>
</html>
<!-- === END FOOTER === -->