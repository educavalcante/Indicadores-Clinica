<?
session_start();
date_default_timezone_set('America/Bahia');
include "sgbd/suporte.php";
$sql = $sql = "SELECT * FROM card_perfil (".$_SESSION['ID'].")" ; ;// consulta do registro atual
// (".$_SESSION['ID'].")
foreach ($suporte->query($sql) as $row) {    
} //Abre a consulta uma linha só
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
                    <div class="image pull-left">
                        <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="info">
                        <h4>Bem vindo</h4>
                        <p>
                            <? echo $_SESSION['NOME'] ?>
                        </p>
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
                <div class="header-icon"><i class="pe-7s-user"></i></div>
                <div class="header-title">
                    <h1>Meu Perfil</h1>
                    <small>
                        <?echo $_SESSION['NOME']?>
                    </small>
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index.php">Inicio</a>
                        <li><a href="#">Dashboard</a></li>
                    </ol>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">        
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body" onclick="location.href='#';">
                                <div class="statistic-box">
                                    <h2><span class="count-number">
                                            <? echo $row['CARD0']; ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-comments fa-2x"></i>
                                    <h4 id="abertos">Abertos</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body" onclick="location.href='?#meuscham';">
                                <div class="statistic-box">
                                    <h2><span class="count-number">
                                            <? echo $row['CARD1']; ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Meus Chamados</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body" onclick="location.href='?#fechasem';">
                                <div class="statistic-box">
                                    <h2><span class="count-number">
                                            <? echo $row['CARD2']; ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-times fa-2x"></i>
                                    <h4>Fechados Sem.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body" onclick="location.href='?#fechahoje';">
                                <div class="statistic-box">
                                    <h2><span class="count-number">
                                            <? echo $row['CARD3']; ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-users fa-2x"></i>
                                    <h4>Fechados Hoje</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body" onclick="location.href='?#regishoje';">
                                <div class="statistic-box">
                                    <h2><span class="count-number">
                                            <? echo $row['CARD4']; ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-hand-pointer-o fa-2x"></i>
                                    <h4>Registros Hoje</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-bd cardbox">
                            <div class="panel-body" onclick="location.href='?#atividades';">
                                <div class="statistic-box">
                                    <h2><span class="count-number">
                                            <? echo $row['CARD5']; ?>
                                        </span>
                                    </h2>
                                </div>
                                <div class="items pull-left">
                                    <i class="fa fa-calendar fa-2x"></i>
                                    <h4>Atividades</h4>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>                        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-6">
                        <div class="panel panel-bd lobidrag" id="regishoje">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Registros Hoje</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tarefa" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ord</th>
                                                <th>Data e Hora</th>
                                                
                                                <th>Local</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <? 
                                                $sql = "select id, datahora, calog.ip from calog
                                                inner join usuarios on (usuarios.automacao = calog.id)
                                                where codigo = '".$_SESSION['ID']."' AND datahora >= current_date" ; // consulta do registro atual
                                                $cont = 1;
                                                foreach ($suporte->query($sql) as $rowinterno) { 
                                            
                                                ?>
                                            <tr>
                                                <td>
                                                    <? echo $cont; ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['DATAHORA']; ?>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['IP']; ?>
                                                </td>
                                            </tr>
                                            <? $cont = $cont + 1; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-6">
                        <div class="panel panel-bd lobidrag" id="atividades">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs form-group-addon">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Próximas Atividades</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Realizadas</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="tarefa" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Ord</th>
                                                        <th>Grupo</th>
                                                        <th>Assunto</th>
                                                        <th>De:</th>
                                                        <th>Até:</th>
                                                        <th>Custo</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <? 
                                               
                                                $sql = "select * from atividade where inicio >= current_time and funcionario = '".$_SESSION['ID']."' order by inicio" ; // consulta do registro atual
                                                $cont = 1;
                                                foreach ($suporte->query($sql) as $rowinterno) { 
                                                if($rowinterno['INICIO'] <= date("d/m/y"))                                         
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <? echo $cont; ?>
                                                        </td>
                                                        <td>
                                                            CPC
                                                        </td>
                                                        <td>
                                                            <? echo $rowinterno['OBSERVACAO']; ?>
                                                        </td>
                                                        <td>
                                                            <?  echo date("d/m/y H:i", strtotime($rowinterno['INICIO']));?>
                                                        </td>
                                                        <td>
                                                            <? echo date("d/m/y H:i", strtotime($rowinterno['FINAL'])); ?>
                                                        </td>
                                                        <td>
                                                            Sim
                                                        </td>
                                                        <td>
                                                            <span class="label-warning label label-default">À
                                                                realizar</span>
                                                        </td>
                                                    </tr>
                                                    <? $cont = $cont + 1; }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="tarefa" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Ord</th>
                                                        <th>Grupo</th>
                                                        <th>Assunto</th>
                                                        <th>De:</th>
                                                        <th>Até:</th>
                                                        <th>Custo</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <? 
                                                        $sql = "select usuarios.a_nome, ativtipo.descricao, inicio, final from atividade inner join usuarios on (usuarios.codigo = atividade.funcionario) inner join ativtipo on (ativtipo.indice = atividade.ativtipo) where funcionario = '".$_SESSION['ID']."' order by inicio " ; // consulta do registro atual
                                                        $cont = 1;
                                                        foreach ($suporte->query($sql) as $rowinterno) {                                                 
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <? echo $cont; ?>
                                                        </td>
                                                        <td>
                                                            CPC
                                                        </td>
                                                        <td>
                                                            <? echo $rowinterno['DESCRICAO']; ?>
                                                        </td>
                                                        <td>
                                                            <? echo date("d/m/y H:i", strtotime($rowinterno['INICIO'])); ?>
                                                        </td>
                                                        <td>
                                                            <? echo date("d/m/y H:i", strtotime($rowinterno['FINAL'])); ?>
                                                        </td>
                                                        <td>
                                                            Sim
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="<?if (strtotime($rowinterno['INICIO']))?>label-success label label-default">Realizado</span>
                                                        </td>
                                                    </tr>
                                                    <? $cont = $cont + 1; }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-12">
                        <div class="panel panel-bd lobidrag" id="meuscham">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Meus Chamados</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tarefa" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ord</th>
                                                <th>OS</th>
                                                <th>Assunto</th>
                                                <th>Status</th>
                                                <th>Desenvolvimento</th>
                                                <th>Tipo</th>
                                                <th>Prioridade</th>
                                                <th>Data</th>
                                                <th>Cliente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <? 
                                                $sql = "select * from clientefechado where funcionario = '".$_SESSION['NOME']."' and status in (0,4,5,6) order by data" ; // consulta do registro atual
                                                $cont = 1;
                                                foreach ($suporte->query($sql) as $rowinterno) { 
                                            
                                                ?>
                                            <tr>
                                                <td>
                                                    <? echo $cont; ?>
                                                </td>
                                                <td>
                                                    <a href="fechamento_suporte.php?cod=<? echo $rowinterno['INDICE']; ?>"
                                                        target="_suporte">
                                                        <? echo $rowinterno['INDICE']; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['ASSUNTO']; ?>
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
                    <div class="col-xs-12 col-sm-12 col-lg-6">
                        <div class="panel panel-bd lobidrag" id="fechahoje">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Fechados Hoje</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tarefa" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ord</th>
                                                <th>OS</th>
                                                <th>Assunto</th>
                                                <th>Status</th>
                                                <th>Desenvolvimento</th> 
                                                <th>Tipo</th>
                                                <th>Prioridade</th>
                                                <th>Data</th>
                                                <th>Cliente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <? 
                                                $sql = "select * from clientefechado where fechado >= current_date and funcionario = '".$_SESSION['NOME']."' order by fechado" ; // consulta do registro atual
                                                $cont = 1;
                                                foreach ($suporte->query($sql) as $rowinterno) { 
                                            
                                                ?>
                                            <tr>
                                                <td>
                                                    <? echo $cont; ?>
                                                </td>
                                                <td>
                                                    <a href="fechamento_suporte.php?cod=<? echo $rowinterno['INDICE']; ?>"
                                                        target="_suporte">
                                                        <? echo $rowinterno['INDICE']; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['ASSUNTO']; ?>
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
                                                    <? echo date("d/m/y H:i", strtotime($rowinterno['FECHADO'])); ?>
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
                    <!-- Bar Chart -->
                    <div class="col-sm-12 col-md-6">
                        <div class="panel panel-bd lobidrag" id="fechasem">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Fechados nesta semana</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tarefa" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ord</th>
                                                <th>OS</th>
                                                <th>Assunto</th>
                                                <th>Desenvolvimento</th>
                                                <th>Tipo</th>
                                                <th>Prioridade</th>
                                                <th>Data</th>
                                                <th>Cliente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <? 
                                                $sql = "select * from clientefechado where fechado >= current_date -7 and funcionario = '".$_SESSION['NOME']."' order by fechado desc" ; // consulta do registro atual
                                                $cont = 1;
                                                foreach ($suporte->query($sql) as $rowinterno) { 
                                            
                                                ?>
                                            <tr>
                                                <td>
                                                    <? echo $cont; ?>
                                                </td>
                                                <td>
                                                    <a href="fechamento_suporte.php?cod=<? echo $rowinterno['INDICE']; ?>"
                                                        target="_suporte">
                                                        <? echo $rowinterno['INDICE']; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <? echo $rowinterno['ASSUNTO']; ?>
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
                                                    <? echo date("d/m/y H:i", strtotime($rowinterno['FECHADO'])); ?>
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
                </div> <!--row-->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
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