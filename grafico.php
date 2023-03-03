<?
session_start();
include "sgbd/suporte.php";
include "sgbd/prisao.php";
$sql = "SELECT * FROM card" ; // consulta do registro atual

    foreach ($suporte->query($sql) as $row) {} //Abre a consulta uma linha só
    
    if (!isset($_GET['regime'])) $_GET['regime'] = 'total';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <meta http-equiv="refresh" content="300">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de Suporte</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="Favicon.svg" type="image/x-icon">
    <!-- Start Global Mandatory Style
   =====================================================================-->
    <!-- jquery-ui css -->
    <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css" />
    <!-- Pace css -->
    <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Pe-icon -->
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
    <!-- Themify icons -->
    <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />
    <!-- End Global Mandatory Style
        =====================================================================-->
    <!-- Start page Label Plugins 
        =====================================================================-->
    <!-- Toastr css -->
    <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css" />
    <!-- Emojionearea -->
    <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css" />
    <!-- Monthly css -->
    <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css" />
    <!-- End page Label Plugins 
        =====================================================================-->
    <!-- Start Theme Layout Style
        =====================================================================-->
    <!-- Theme style -->
    <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
        =====================================================================-->
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
    <header class="main-header">
            <a href="index.php" class="logo">
                <!-- Logo -->
                <span class="logo-mini">
                    <!--<b>A</b>H-admin-->
                    <img src="logoteste2.svg" alt="">
                </span>
                <span class="logo-lg">
                    <!--<b>Admin</b>H-admin-->
                    <img src="logoteste.png" alt="">
                </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top ">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <!-- Sidebar toggle button-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-tasks"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-user admin-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="user-image">
                                    <img src="logoteste2.svg" class="img-circle" height="40" width="40"
                                        alt="User Image">
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="perfil.php"><i class="fa fa-users"></i>Meu Perfil</a></li>                                
                                <li><a href="loginSuporte.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <a href="perfil.php">
                        <div class="image pull-left">
                            <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                        </div>
                    </a>
                    <div class="info">
                        <h4>Bem vindo</h4>
                        <p><? echo $_SESSION['NOME'] ?></p>
                    </div>
                </div>

                <!-- sidebar menu -->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-hospital-o"></i><span>Inicio</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-address-card"></i><span>Cadastro</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="index.php #tarefa">Tarefa</a></li>
                            <li><a href="cadastro_clientes.php">Cliente</a></li>
                            <li><a href="#">Funcionario</a></li>
                            <li><a href="#">Configurações</a></li>
                            <li><a href="#">Ajuda do Sistema</a></li>
                            <li><a href="#">Agenda</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-filter"></i><span>Filtros</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="filtro.php">Aplicar Filtro</a></li>                                                      
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pencil-square-o"></i><span>Editar</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Desfazer</a></li>
                            <li><a href="#">Recortar</a></li>
                            <li><a href="#">Copiar</a></li>
                            <li><a href="#">Colar</a></li>
                            <li><a href="#">Excluir</a></li>
                            <li><a href="#">Selecionar tudo</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-window-maximize"></i><span>Exibir</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Chamado telefone</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list-alt"></i> <span>Relatório</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="grafico.php">Gráfico</a></li>
                            <li onclick="myFunction()"><a href="#">Listagem de Chamados</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-check-square-o"></i><span>Utilitários</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="loginSuporte.php">Logoff</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="agendamento_demandas.php">
                            <i class="fa fa-plus-circle"></i><span>Adicionar Demandas</span>
                            <span class="pull-right-container">
                            </span>
                        </a>                    
                    </li>
                    <li class="treeview">
                        <a href="orcamento.php">
                            <i class="fa fa-pencil"></i><span>Orçamento</span>
                            <span class="pull-right-container">
                            </span>
                        </a>                    
                    </li>
                    </li>
                </ul>
            </div> <!-- /.sidebar -->
        </aside>
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <img src="logoteste2.svg" height="45" width="45">
                </div>
                <div class="header-title">
                    <h1>Gráfico</h1>
                    <small> Sistema de Surporte</small>
                    <!--<ol class="breadcrumb hidden-xs">
                            <li><a href="index.html"><i class="pe-7s-home"></i> Início</a></li>
                            <li class="active">Dashboard</li>
                        </ol>-->
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">                    
                <div class="row">
                    <!-- Bar Chart -->
                    <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Chamados</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="barChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-xs-12 col-sm-12 col-lg-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 name="tarefa">Controle de Chamados</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tarefa"
                                        class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ord</th>
                                                <th>OS</th>
                                                <th>Assunto</th>
                                                <th>Func</th>
                                                <th>Status</th>
                                                <th>Nivel</th>
                                                <th>Tipo</th>
                                                <th>Prioridade</th>
                                                <th>Data</th>
                                                <th>Cliente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <? 
                                                $sql = "select * from clienteaberto" ; // consulta do registro atual
                                                $cont = 1;
                                                foreach ($suporte->query($sql) as $rowinterno) { 
                                            
                                                ?>
                                            <tr>
                                                <td>
                                                    <? echo $cont; ?>
                                                </td>
                                                <td>
                                                   <a href="fechamento_suporte.php?cod=<? echo $rowinterno['INDICE']; ?>" target="_suporte"> <? echo $rowinterno['INDICE']; ?></a>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['ASSUNTO']; ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['FUNCIONARIO']; ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['STATUS']; ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['NIVEL']; ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['TIPO']; ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['PRIORIDADE']; ?>
                                                </td>
                                                <td>
                                                    <? echo date("d/m/y H:i", strtotime($rowinterno['DATA'])); ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['CLIENTE']; ?>
                                                </td>

                                            </tr>
                                            <? $cont = $cont + 1; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </section> <!-- /.content -->

        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2022 <a href="#">CPC Brasil Sistemas</a>.</strong> Todos os direitos reservados.
        </footer>
    </div> <!-- ./wrapper -->
    <!-- ./wrapper -->
    <!-- Start Core Plugins
        =====================================================================-->
    <!-- jQuery -->
    <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- jquery-ui -->
    <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- lobipanel -->
    <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
    <!-- Pace js -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- Hadmin frame -->
    <script src="assets/dist/js/custom1.js" type="text/javascript"></script>
    <!-- End Core Plugins
        =====================================================================-->
    <!-- Start Page Lavel Plugins
        =====================================================================-->
    <!-- Toastr js -->
    <script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
    <!-- Sparkline js -->
    <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
    <!-- Data maps js -->
    <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
    <!-- Counter js -->
    <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <!-- ChartJs JavaScript -->
    <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
    <script src="assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
    <!-- Monthly js -->
    <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
    <!-- Data maps -->
    <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>

    <!-- End Page Lavel Plugins
        =====================================================================-->
    <!-- Start Theme label Script
        =====================================================================-->
    <!-- Dashboard js -->
    <script src="assets/dist/js/custom.js" type="text/javascript"></script>

    <!-- End Theme label Script
        =====================================================================-->
        <script>
        
        function myFunction() {
            window.print();
        }
    </script>
    <script>
        "use strict"; // Start of use strict

        //counter
        $('.count-number').counterUp({
            delay: 10,
            time: 5000
        });

        var colors = d3.scale.category10();

        window.setInterval(function () {
            basic_choropleth.updateChoropleth({
                USA: colors(Math.random() * 10),
                RUS: colors(Math.random() * 100),
                AUS: { fillKey: 'authorHasTraveledTo' },
                BRA: colors(Math.random() * 50),
                CAN: colors(Math.random() * 50),
                ZAF: colors(Math.random() * 50),
                IND: colors(Math.random() * 50)
            });
        }, 2000);

        //bar chart
        <?
            $sql = "SELECT * FROM grafico('aberto')" ; // consulta do registro atual
        foreach($suporte -> query($sql) as $rowgraf) { } //Abre a consulta uma linha só
        ?>

                var ctx = document.getElementById("barChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<? echo $rowgraf['TEXTOVALOR1'] ?>],
                datasets: [
                    {
                        label: "<? echo $rowgraf['TITULO']; ?>",
                        data: [<? echo $rowgraf['VALOR1'] ?>],
                        borderColor: "#009688",
                        borderWidth: "0",
                        backgroundColor: "#009688"
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });


        // Message
        $('.message_inner').slimScroll({
            size: '3px',
            height: '320px'
        });

        //emojionearea
        $(".emojionearea").emojioneArea({
            pickerPosition: "top",
            tonesStyle: "radio"
        });



                //line chart
                <?
            $sql = "SELECT * FROM grafico('cliente')" ; // consulta do registro atual
        foreach($suporte -> query($sql) as $rowgraf2) { } //Abre a consulta uma linha só
                ?>

                    var ctx = document.getElementById("lineChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<? echo $rowgraf2['TEXTOVALOR1']; ?>],
            datasets: [

                {
                    label: "<? echo $rowgraf2['TITULO']; ?>",
                    borderColor: "#009688",
                    borderWidth: "1",
                    backgroundColor: "#009688",
                    pointHighlightStroke: "#009688",
                    data: [<? echo $rowgraf2['VALOR1']; ?>]
        }
                        ]
                    },
        options: {
            responsive: true,
                tooltips: {
                mode: 'index',
                    intersect: false
            },
            hover: {
                mode: 'nearest',
                    intersect: true
            }

        }
                });

        var ctx = document.getElementById("lineChart2");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [<? echo $rowgraf2['TEXTOVALOR2']; ?>],
            datasets: [

                {
                    label: "<? echo $rowgraf2['TITULO']; ?>",
                    borderColor: "#009688",
                    borderWidth: "1",
                    backgroundColor: "#009688",
                    pointHighlightStroke: "#009688",
                    data: [<? echo $rowgraf2['VALOR2']; ?>]
        }
                        ]
                    },
        options: {
            responsive: true,
                tooltips: {
                mode: 'index',
                    intersect: false
            },
            hover: {
                mode: 'nearest',
                    intersect: true
            }

        }
                });


    </script>

</body>

</html>