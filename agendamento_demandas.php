<?
session_start();
include "sgbd/suporte.php";
date_default_timezone_set('America/Bahia');

if (isset($_POST['funcionario']))
 {
    $dml = "INSERT INTO ATIVIDADE (FUNCIONARIO, ATIVTIPO, INICIO, FINAL, OBSERVACAO) VALUES (?,?,?,?,?)";
    $data = array($_POST['funcionario'], $_POST['ativtipo'], str_replace("/",".",$_POST['inicio']), str_replace("/",".",$_POST['final']), $_POST['observacao']);  
    $dmlcmd = $suporte->prepare($dml);
    $dmlcmd->execute($data);  
  
 }
 if (isset($_GET['indice']))
 {
    $dml = "DELETE FROM  ATIVIDADE where INDICE =?";
    $data = array($_GET['indice']);  
    $dmlcmd = $suporte->prepare($dml);
    $dmlcmd->execute($data);  
  
 }
//  if ($_POST['FUNCIONARIO'] = 29)
//  $_GET['FUNCIONARIO'] == 'nANDO';
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
    <title>Agendamentos de Demandas - Suporte</title>

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
                            <li><a href="tarefa.php">Tarefa</a></li>
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
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="clientes.php">
                            <i class="fa fa-list"></i><span>Listagem de Clientes</span>
                        </a>
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
                            <i class="fa fa-money"></i><span>Orçamento</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
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
                    <i class="pe-7s-note"></i>
                </div>
                <div class="header-title">
                    <h1>Agendamento de Demandas</h1>
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
                    <!-- Form controls -->
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <form class="col-sm-12" method="post" action="agendamento_demandas.php" >                                    
                                <div class="col-sm-6 form-group text-center">
                                            <label>Funcionario</label>
                                            <select class="form-control text-center" id="exampleSelect1" name="funcionario"
                                                size="1" required>
                                                <option value="">Selecione uma opção</option>
                                                <option value="26">Ailton Silva</option>
                                                <option value="1">Arnaldo Neto</option>
                                                <option value="3">Eduardo Cavalcante</option>
                                                <option value="22">Leonardo Rocha</option>
                                                <option value="23">Lucas Feitosa</option>
                                                <option value="29">Luis Fernando</option> 
                                                <option value="14">Isabel Freitas</option>                                                                                            
                                            </select>
                                        </div> 
                                    <div class="col-sm-6 form-group text-center">
                                            <label>Tipo</label>
                                            <select class="form-control text-center" id="exampleSelect1" name="ativtipo"
                                                size="1" required>
                                                <option value="">Selecione uma opção</option>
                                                <option value="1">Home Office</option>
                                                <option value="2">Home a Tarde</option>
                                                <option value="3">Visita ao Cliente</option>
                                                <option value="4">Férias</option>
                                                <option value="5">Ricca</option>
                                                <option value="6">Viagem</option>    
                                                <option value="7">Treinamento</option>
                                                <option value="8">Pessoal</option>                                                                                            
                                                <option value="9">Falta</option>                                                                                            
                                                <option value="10">Reunião</option>                                                                                            
                                            </select>
                                        </div> 
                                    <div class="col-sm-4 form-group text-center">
                                        <label>De:</label>
                                        <input type="text" class="form-control" name="inicio" value="<?date('d/m/y H:i')?>" required>
                                    </div> 
                                    <div class="col-sm-4 form-group text-center">
                                        <label>Até:</label>
                                        <input type="text" class="form-control" name="final" value="<?date('d/m/y H:i')?>" required>
                                    </div>                                                                                                          
                                        <div class="col-sm-4 form-group text-center">
                                            <label>Custo</label>
                                            <select class="form-control text-center" id="exampleSelect1" name="select"
                                                size="1">
                                                <option selected class="test">Sim</option>
                                                <option>Não</option>                                                                                         
                                            </select>
                                        </div>     
                                        <div class="col-sm-12 form-group">
                                        <label>Complemento:</label>
                                        <textarea class="form-control" rows="3" name="observacao"></textarea>
                                    </div>                                                                        
                                    &nbsp;
                                    &nbsp;                                    
                                        <button type="reset" class="btn btn-labeled btn-danger m-b-5"
                                            data-toggle="tooltip" data-placement="top" title="Cancelar"><i
                                                class="ti-cancel"></i>
                                            <span class="btn"><i class="glyphicon glyphicon-remove"></i></span>
                                        </button>                                        
                                    &nbsp;                                                                                                           
                                        <button type="submit"  class="toastr2 btn btn-labeled btn-primary m-b-5"
                                            data-toggle="tooltip submit" data-placement="top" title="Enviar"><i
                                                class="ti-cancel"></i>
                                            <span class="btn"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section> <!-- /.content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">                                                                
                            </div>                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ord</th>
                                            <th>Funcionario</th>
                                            <th>Grupo</th>
                                            <th>Dia</th>
                                            <th>De:</th>
                                            <th>Até:</th>
                                            <th>Assunto</th>
                                            <th>Custo</th>
                                            <th>status</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                               <? 
                                                $sql = "select * from atividade where funcionario = '".$_SESSION['ID']."' order by indice desc" ; // consulta do registro atual
                                                $cont = 1;                                                                                                
                                                foreach ($suporte->query($sql) as $rowinterno) {                                             
                                                ?>
                                        <tr>
                                            <td><? echo $cont; ?></td>                                                                                                 
                                            <td><? echo $rowinterno['FUNCIONARIO']; ?></td>
                                            <td>CPC</td>
                                            <td><? echo date("d/m/20y", strtotime($rowinterno['INICIO'])); ?></td>
                                            <td><? echo date("d/m/y H:i", strtotime($rowinterno['INICIO'])); ?></td>
                                            <td><? echo date("d/m/y H:i", strtotime($rowinterno['FINAL'])); ?></td>
                                            <td><? echo $rowinterno['OBSERVACAO']; ?></td>
                                            <td>Sim</td>
                                            <td><span class="label-success label label-default">Aceito</span></td>
                                            <td>                                                
                                                <a href="agendamento_demandas.php?indice=<? echo $rowinterno['INDICE'] ?>">
                                                <button class="btn btn-danger btn-xs" data-toggle="tooltip"
                                                data-placement="right" title="Apagar "><i class="fa fa-trash-o"
                                                aria-hidden="true"></i></button></a>
                                            </td>
                                        </tr>
                                        <? $cont = $cont + 1;
                                            // if ($cont == 10) $cont = false;
                                             } ?>                                        
                                    </tbody>
                                </table>
                            </div>                            
                        </div>
                    </div>
                </div>        
        </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2022 <a href="#">CPC Brasil Sistemas</a>.</strong> Todos os direitos reservados.
        </footer>
    </div> <!-- ./wrapper -->
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
    <!-- Start Theme label Script
        =====================================================================-->
    <!-- Dashboard js -->
    <script src="assets/dist/js/custom.js" type="text/javascript"></script>
    <!-- End Theme label Script
        =====================================================================-->
        
</body>

</html>