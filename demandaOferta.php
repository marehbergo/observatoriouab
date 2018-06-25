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
        <script type="text/javascript" src="functions_v1.js"></script>
        
    </head>
    
    <body>
        <div id="body-bg">
            <!-- === BEGIN HEADER === -->
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
            
            <div id="post_header" class="container" style="height: 40px">
                <!-- Spacing below header -->
            </div>
            <div id="content-top-border" class="container"></div>
            <!-- === END HEADER === -->
            
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-40">
                        <h2>Cadastrar oferta de Curso</h2>
                                                
                        <!-- Select IES e cursos -->
                        <form name="Cadastro" action="cadastroOferta.php" method="POST">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>IPES:</label>
                                    <select name="continentes" id="continentes" class="form-control form-control-lg">
                                        <option value="0">Selecione uma IPES ... </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Cursos:</label>
                                    <select name="paises" id="paises" class="form-control form-control-lg">
                                        <option value="0">Selecione um Curso ... </option>
                                    </select>
                                </div>
                                <!-- Polos -->
                                <div class="col-md-4">
                                    <label>Polos:</label>
                                    <select name="cidades" id="cidades" class="form-control form-control-lg">
                                        <option value="0">Selecione um Polo ... </option>
                                    </select>
                                    <div class="center"><a href="" data-toggle="modal" data-target="#squarespaceModal">Ver demanda de cursos neste polo</a></div>
                                    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                    <h3 class="modal-title" id="lineModalLabel">Cursos com demanda neste polo:</h3> <br>
                                                    <div class="container">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <h3 class="panel-title">IPES</h3>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h3 class="panel-title">Curso</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body of-y">
                                                                <ul name="ofertas" id="ofertas" class="list-group" style="width: 800px; height: 300px; overflow: auto">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <div class="row">
                                <!-- Chamada -->
                                <div class="col-md-2 mb-2">
                                    <label>Chamada:</label>
                                    <select name="chamada" id="chamada" class="form-control form-control-lg">
                                        <option value="">Selecione</option>
                                        <option value="PNAP">PNAP</option>
                                        <option value="UAB">UAB</option>
                                    </select>
                                </div>
                                <!-- Tipo -->
                                <div class="col-md-3 mb-2">
                                    <label>Tipo:</label>
                                    <select name="tipo" id="tipo" class="form-control form-control-lg">
                                        <option value="">Selecione</option>
                                        <option value="Bacharelado">Bacharelado</option>
                                        <option value="Licenciatura">Licenciatura</option>    
                                        <option value="Especialização">Especialização</option>
                                        <option value="Tecnológico">Tecnológico</option>
                                    </select>
                                </div>
                                <!-- Formaçao de Professores -->
                                <div class="col-md-3 mb-2">
                                        <label>Formação de Professores:</label>
                                        <select name="formacao" id="formacao" class="form-control form-control-lg">
                                            <option value="0">Selecione</option>
                                            <option value="Sim">Sim</option>
                                            <option value="Não">Não</option>
                                        </select>
                                </div>
                                <!-- Inicio -->
                                <div class="col-md-2 mb-2">
                                    <label>Início:</label>
                                    <select name="inicio" id="inicio" class="form-control form-control-lg">
                                        <option value="">Selecione </option>
                                        <option value="Julho/2018">Julho/2018</option>
                                        <option value="Outubro/2018">Outubro/2018</option>
                                        <option value="Janeiro/2019">Janeiro/2019</option>
                                        <option value="Março/2019">Março/2019</option>
                                        <option value="Junho/2019">Junho/2019</option>
                                        <option value="Outubro/2019">Outubro/2019</option>
                                    </select>
                                </div> 
                                <!-- Vagas -->
                                <div class="col-md-2 mb-2">
                                    <label>Vagas:</label>
                                    <div class="form-group has-default">
                                        <input type="text" name="vagas" class="form-control" placeholder="Num. Vagas">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Buttons -->
                                <!-- Cadastrar Oferta-->
                                <div class="col-md-8">
                                    <button type="button" name="enviar" id="enviar" class="btn btn-labeled btn-primary" style="width: 135px;">Cadastrar Oferta</button>
                                </div>

                                <!-- Editar oferta-->
                                <div class="col-md-2">
                                    <a href="editoferta.php" name="editar" id="editar" class="btn btn-primary" style="width: 135px;">Editar Oferta</a>
                                </div>

                                <!-- Visualizar ofertas -->
                                <form action="filtroOferta.php" method="post">
                                    <div class="col-md-2">
                                        <div class="center"><button type="button" data-toggle="modal" data-target="#squarespaceModal1" onclick="carregar('gmapsAPI.html');" class="btn btn-labeled btn-primary" style="width: 135px;">Visualizar Ofertas</button></div>
                                        <div class="modal fade" id="squarespaceModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                        <div class="row">    
                                                            <div class="col-md-7">
                                                                <h3 class="modal-title" id="lineModalLabel">Ofertas já cadastradas:</h3>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="button" id="dados" name="dados" class="btn btn-labeled btn-default" >Atualizar dados</span></button>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="button" id="reloadmapa" name="reloadmapa" class="btn btn-labeled btn-default" >Atualizar mapa</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="conteudo" style="height: 500px" class="modal-header"></div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> <br>
                        </form>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container"></div>
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
            <!-- End Footer Menu -->
            
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
            
            <!-- Google Maps Scripts -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5bShejGZgNg643dC5kyIXQ6J6OfLVueA&callback=initialize"></script>
            <script type="text/javascript" src="assets/js/map.js"></script>
            <!-- End JS -->

            <script>
                $(document).ready(function(){
                    $("#buscar").click(function(){
                        $("#resultado").load("filtroOferta.php");
                    });
                });
            </script>

            <script>
                function carregar(pagina){
                    $("#conteudo").load(pagina);
                }
            </script>

            <script>
                $('#dados').click(function(){
                    $.get('criarXML.php', function(result){
                        alert("Dados atualizados.");
                    });
                });
            </script>

<!--            <script>
                $(document).ready(function() {
                    $('#dados').on('click', function() {
                        $('#conteudo').load("gmapsAPI.html");
                    });
                });
            </script>
            -->
            <script>
                $(document).ready(function() {
                    $('#reloadmapa').on('click', function() {
                        $('#conteudo').load("gmapsAPI.html");
                    });
                });
            </script>
         </div>
    </body>
</html>
<!-- === END FOOTER === -->