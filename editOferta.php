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
        <script type="text/javascript" src="functions_v5.js"></script>
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
                        <h2>Editar oferta de Curso</h2>
                                                
                        <!-- Select IES e cursos -->
                        <form name="edit" action="" method="POST">
                            <div class="row">
                                <!-- IPES -->
                                <div class="col-md-4">
                                    <label>IPES:</label>
                                    <select name="ipes" id="ipes" class="form-control form-control-lg">
                                        <option value="0">Selecione uma IPES ... </option>
                                    </select>
                                </div>
                            </div> <br>
                            <div class="row">
                                <!-- Cursos -->
                                <div class="col-md-12">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            
                                                <th>Curso</th>
                                                <th>Polo</th>
                                                <th>Tipo</th> 
                                                <th>Chamada</th>
                                                <th>Inicio</th>
                                                <th>Formação</th>
                                                <th>Vagas</th>
                                                <th></th>
                                                <th></th>
                                            
                                        </thead>
                                        <tbody>
                                            <div id="resultado"></div>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="edit" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div id="teste"></div>
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h4 class="modal-title">Editar dados</h4>
                                            <div id="teste"></div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                <div id="teste"></div>
                                                    <label>UF:</label>
                                                    <select name="listauf" id="listauf" class="form-control form-control-lg">
                                                        <option value="0">Selecione ... </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-9">
                                                    <label>Polo:</label>
                                                    <select name="listapolos" id="listapolos" class="form-control form-control-lg">
                                                        <option value="0">Selecione um polo ... </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Vagas:</label>
                                                    <input id="vagas" type="text" class="form-control" name="vagas" placeholder="Num. Vagas">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Início:</label>
                                                    <select name="inicio" id="inicio" class="form-control form-control-lg">
                                                        <option value="">Selecione </option>
                                                        <option value="Julho/2018">julho.2018</option>
                                                        <option value="Outubro/2018">outubro.2018</option>
                                                        <option value="Janeiro/2019">janeiro.2019</option>
                                                        <option value="Março/2019">março.2019</option>
                                                        <option value="Junho/2019">junho.2019</option>
                                                        <option value="Outubro/2019">outubro.2019</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-warning" type="submit" id="editar" data-dismiss="modal">Atualizar Dados</button>
                                            <button class="btn btn-default" type="button" data-dismiss="modal" style="margin-right: 20px;">Cancelar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div id="delete" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h4 class="modal-title">Excluir oferta</h4>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Você deseja excluir esta oferta?</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="del" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right: 20px;">Cancelar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div> 
                            </div>
                        
                            <!-- Buttons -->
                            <div class="col-md-12">
                                <button type="submit" name="enviar" id="enviar" class="btn btn-labeled btn-primary" >Salvar Alterações</button>
                            </div>
                        </form>

                        

                        
                        <!--
                        <div class="row">
                            <div class="col-md-8">
                                <div id="map-canvas" style="height: 500px"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="panel-title">IPES</label>
                                            </div>
                                            <div class="col-md-9">
                                                <label class="panel-title">Curso</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body" style="background-color: white">
                                        <ul name="ofertas" id="ofertas" class="list-group">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
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
                    $(".update").click(function(){
                        var id = $(this).data("uid");
                        var oferta = $(this).data("id");
                        var f1 = $("#f1").html();
                        var l1 = $("#l1").html();
                        var m1 = $("#m1").html();
                        var f2 = $("#f2").html();
                        var l2 = $("#l2").html();
                        var m2 = $("#m2").html();
                        if(id==1){
                            $("#teste").val(oferta);
                            $("#fn").val(f1);
                            $("#mn").val(m1);
                            $("#ln").val(l1);
                        }else if(id==2){
                            $("#fn").val(f2);
                            $("#mn").val(m2);
                            $("#ln").val(l2);
                        }
                        $("#up").click(function(){
                            if(id==1){
                                var fn = $("#fn").val();
                                var mn = $("#mn").val();
                                var ln = $("#ln").val();    
                                $("#f1").html(fn);
                                $("#m1").html(mn);
                                $("#l1").html(ln);
                            }else if(id==2){
                                var fn = $("#fn").val();
                                var mn = $("#mn").val();
                                var ln = $("#ln").val();    
                                $("#f2").html(fn);
                                $("#m2").html(mn);
                                $("#l2").html(ln);              
                            }
                        });
                    });
                    $(".delete").click(function(){
                        var id = $(this).data("uid");
                        $("#del").click(function(){
                            if(id==1){
                                $("#d1").html('');
                            }else if(id==2){
                                $("#d2").html('');
                            }
                        });
                    });
                    });
            </script>
         </div>
    </body>
</html>
<!-- === END FOOTER === -->