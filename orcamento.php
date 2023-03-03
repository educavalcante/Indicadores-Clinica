<?
session_start();
include "sgbd/suporte.php";
 if (isset($_POST['funcionario']))
 {
    $dml = "INSERT INTO ORCAMENTO (SUS, CONVENIO, PARTICULAR, CONSULTA, EXAME, CIRURGPEQ, CIRURGGRANDE, CONSULTORIO, EMERGENCIA, ALADIA, ALAENFAPT, UTI, CC, COMPUTADOR, MEDICO, FUNCIONARIO, USUARIO, ESPECIALIDADE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $data = array($_POST['sus'], $_POST['convenio'], $_POST['particular'], $_POST['consulta'], $_POST['exame'], $_POST['cirurgpeq'], $_POST['cirurggrande'], $_POST['consultorio'], $_POST['emergencia'], $_POST['aladia'], $_POST['alaenfapt'], $_POST['uti'], $_POST['cc'], $_POST['computador'], $_POST['medico'], $_POST['funcionario'], $_POST['usuario'], $_POST['especialidade']);  
    $dmlcmd = $suporte->prepare($dml);
    $dmlcmd->execute($data);  
  
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Orçamento - Suporte CPC Brasil</title>

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
                            <li><a href="#">Tarefa</a></li>
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
         <form method="post" action="orcamento.php" id="form">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note"></i>
                </div>
                <div class="header-title">
                    <h1>Formulario de Contrato</h1>
                    <small>CPC Brasil Sistemas</small>
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index.php"><i class="pe-7s-home"></i> Inicio</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">                    
                    <div class="col-sm-12 col-md-6">
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-heading text-center">
                                <label>
                                        Planos %</a>
                                </label>
                            </div>                           
                            <div class="panel-body text-center">
                                <div class="col-sm-4 form-group text-center">
                                    <label>SUS</label>
                                    <input type="text" class="form-control" name="sus"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Convenio</label>
                                    <input type="text" class="form-control" name="convenio"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Particular</label>
                                    <input type="text" class="form-control" name="particular"  required>
                                </div>                                
                            </div>
                        </div>
                    </div>                                    
                    <div class="col-sm-12 col-md-6">
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-heading text-center">
                               <label> 
                                        Serviços % </a>
                                </label>
                            </div>
                            <div class="panel-body text-center">
                                <div class="col-sm-3 form-group text-center">
                                    <label>Consulta</label>
                                    <input type="text" class="form-control" name="consulta"  required>
                                </div>
                                <div class="col-sm-3 form-group text-center">
                                    <label>Exames</label>
                                    <input type="text" class="form-control" name="exame"  required>
                                </div>
                                <div class="col-sm-3 form-group text-center">
                                    <label>Cirurgias Peq.</label>
                                    <input type="text" class="form-control" name="cirurgpeq"  required>
                                </div>
                                <div class="col-sm-3 form-group text-center">
                                    <label>Cirurgias</label>
                                    <input type="text" class="form-control" name="cirurggrande"  required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                        
                <div class="row">                    
                    <div class="col-sm-6">
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-heading text-center">
                            <label>    
                                Quantidade de Leitos</a>
                            </label>
                            </div>
                            <div class="panel-body text-center">
                                <div class="col-sm-4 form-group text-center">
                                    <label>Consultório</label>
                                    <input type="text" class="form-control" name="consultorio"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Emergência</label>
                                    <input type="text" class="form-control" name="emergencia" required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Alas Int Dia</label>
                                    <input type="text" class="form-control" name="aladia"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Alas Enf/Apt</label>
                                    <input type="text" class="form-control" name="alaenfapt"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>UTI</label>
                                    <input type="text" class="form-control" name="uti"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>C. Cirúrgico</label>
                                    <input type="text" class="form-control" name="cc"  required>
                                </div>
                            </div>
                        </div>
                    </div>                                 
                    <div class="col-sm-6">
                        <div class="panel panel-bd lobidisable">
                            <div class="panel-heading text-center">
                                <label>
                                        Quantidade Diversos</a>
                                </label>
                            </div>
                            <div class="panel-body text-center">
                                <div class="col-sm-4 form-group text-center">
                                    <label>Computadores</label>
                                    <input type="text" class="form-control" name="computador"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Médicos</label>
                                    <input type="text" class="form-control" name="medico"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Funcionarios</label>
                                    <input type="text" class="form-control" name="funcionario"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Usua. do Sistemas</label>
                                    <input type="text" class="form-control" name="usuario"  required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Especialidades</label>
                                    <input type="text" class="form-control" name="especialidade"  required>
                                </div>                                                                  
                            </div>                                                                                                                          
                        </div>
                    </div> 
                    <div class="col-sm-12 form-group form-group text-center">
                        <button type="reset" class="btn btn-labeled btn-danger m-b-5" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="ti-cancel"></i>                                        
                            <span class="btn "><i class="glyphicon glyphicon-remove"></i></span>
                        </button>
                            &nbsp;
                        <button type="submit" class="btn btn-labeled btn-primary m-b-5 "  data-toggle="tooltip " data-placement="top" title="Enviar"><i class="ti-cancel"></i>                                                                                    
                            <span class="btn"><i class="glyphicon glyphicon-ok"></i></span>
                        </button>
                    </div>
                </div>
            </section>
        </div> <!-- /.content-wrapper -->
    </form>
        <footer class="main-footer text-center">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2022 <a href="#">CPC Brasil Sistemas</a>.</strong> Todos os direitos reservados.
        </footer>
    </div> <!-- ./wrapper -->
    <!-- Start Core Plugins
        =====================================================================-->
    <script src="assets/dist/js/sweetalert2.min" type="text/javascript"></script>
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
    <!-- Start Theme label Script
        =====================================================================-->
    <!-- Dashboard js -->
    <script src="assets/dist/js/custom.js" type="text/javascript"></script>
    <!-- End Theme label Script
        =====================================================================-->
    
</body>

</html>