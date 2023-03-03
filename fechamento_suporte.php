<?
session_start();
include "sgbd/suporte.php";

   // echo "asdasdada111";
    if (isset($_POST['funcionario']))
 {
    // echo "asdasdada";   
    if (!isset($_POST['aviso'])) $_POST['aviso'] = "N";
    if (!isset($_POST['gerar_manual'])) $_POST['gerar_manual'] = "N";
    if (!isset($_POST['personalizacao_exclusiva'])) $_POST['personalizacao_exclusiva'] = "N";
    if (!isset($_POST['desenvolvimento'])) $_POST['desenvolvimento'] = "N";
    $dml = "UPDATE OR INSERT  INTO ajuda (indice, empresa,assunto,prioridade,previsao,status,versao,funcionario, dificuldade,entendimento,tetecliente,tetelocal,aviso,desenvolvimento,personalizacao_exclusiva,gerar_manual,conclusao,fechado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) matching (indice)";
    $data = array($_POST['indice'],  $_POST['empresa'],$_POST['assunto'],$_POST['prioridade'],str_replace("/",".",$_POST['previsao']),$_POST['status'],$_POST['versao'],$_POST['funcionario'],$_POST['dificuldade'],$_POST['entendimento'],$_POST['tetecliente'],$_POST['tetelocal'],$_POST['aviso'],$_POST['desenvolvimento'],$_POST['personalizacao_exclusiva'],$_POST['gerar_manual'],$_POST['conclusao'],str_replace("/",".",$_POST['fechado']));        
    $dmlcmd = $suporte->prepare($dml);
    $dmlcmd->execute($data);  
  
 }
//  if(!isset($_GET['aviso']))
//  {
//     $aviso = 'S';
//  }
//  if(!isset($_GET['desenvolvimento']))
//  {
//     $aviso = 'N';
//  }
//  if(!isset($_GET['personalizacao_exclusiva']))
//  {
//     $aviso = 'N';
//  }
//  if(!isset($_GET['gerar_manual']))
//  {
//     $aviso = 'N';
//  }
 if (!isset($_GET['cod']))
   $_GET['cod'] = $_POST['indice'];
$sql = "SELECT * FROM ajuda where indice =".$_GET['cod'] ; // consulta do registro atual

    foreach ($suporte->query($sql) as $row) {} //Abre a consulta uma linha só

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Fechamento de Chamdos</title>

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
                            <li><a href="tarefa.php" >Tarefa</a></li>
                            <li><a href="cadastro_clientes.php" >Cliente</a></li>
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
                            <li><a href="filtro.php" >Aplicar Filtro</a></li>                                                      
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
                            <li><a href="grafico.php" >Gráfico</a></li>                            
                        </ul>
                    </li>                                     
                    <li class="treeview">
                        <a href="clientes.php" >
                            <i class="fa fa-list"></i><span>Listagem de Clientes</span>                            
                        </a>                        
                    </li>
                    <li class="treeview">
                        <a href="agendamento_demandas.php" >
                            <i class="fa fa-plus-circle"></i><span>Adicionar Demandas</span>
                            <span class="pull-right-container">
                            </span>
                        </a>                    
                    </li>
                    <li class="treeview">
                        <a href="orcamento.php" >
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
                    <i class="pe-7s-close"></i>
                </div>
                <div class="header-title">
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index.php"><i class="pe-7s-home"></i> Início</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <h1>Fechamento de Chamados</h1>
                    <small>CPC Brasil Sistemas</small>
                </div>
            </section>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="GET" action="fechamento_suporte.php">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1 class="modal-title">Procurar chamado</h1>
                            </div>
                            <div class="col-sm-12 form-group text-center">
                                <label>N° do Chamado</label>
                            <input type="text" name="cod" class="form-control text-center">                                             
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary"  class="btn btn-success">Aplicar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
            <!-- Main content -->
            <form method="post" action="fechamento_suporte.php">
                <section class="content">
                    <div class="row">
                        <!-- Form controls -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <!-- <div class="col-sm-1 ">

                                        <input type="text" class="form-control text-center"
                                            value=" readonly name="indice">
                                    </div> -->
                                    <div class="col-sm-2">
                                        <div class="input-group text-center">
                                            <input type="text" class="form-control text-center" value="<? echo $row['INDICE'] ?>" readonly name="indice">
                                                <span class="input-group-addon ">
                                                <button type="button"  data-toggle="modal" data-target="#myModal" style="background:transparent;border:none"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>     
                                    &nbsp;                                                                   
                                    <div class="col-sm-2  form-group text-center" >
                                        <input type="text" class="form-control text-center"
                                         value="<? echo $row['EMPRESA'] ?>" readonly name="empresa">
                                    </div>
                                    <div class="col-sm-2 form-group text-center" >
                                        <input type="text" class="form-control text-center"
                                            value="<? echo $row['ASSUNTO'] ?> " readonly name="assunto">
                                    </div>
                                    <div class="col-sm-2 form-group text-center" >
                                        <input class="form-control text-center" value="<? echo date(" d/m/Y H:i",strtotime($row['DATA'])); ?>" readonly>                                                                                    
                                    </div>
                                    <div class="col-sm-1 form-group text-center" >
                                        <input type="text" class="form-control text-center"
                                            value="<? echo $row['PRIORIDADE'] ?>" readonly name="prioridade">
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="input-group">
                                            <input type="text" class="form-control text-center" value="Anexo" readonly>
                                                <span class="input-group-addon">
                                                <button type="button"  data-toggle="modal" data-target="#myModal2" style="background:transparent;border:none"><i class="fa fa-image"></i></button>
                                            </span>
                                        </div>
                                    </div>     
                                </div>                                        
                                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1 class="modal-title">Procurar chamado</h1>
                                            </div>
                                             <div class="col-sm-12 form-group text-center">
                                                 <img src="" alt="">
                                            </div> 
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                    <button type="button" class="btn btn-primary" class="btn btn-success">Aplicar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                              
                                <div class="panel-body">                                
                                    <div class="col-sm-4 form-group">
                                        <label>Contato</label>
                                        <input type="email" class="form-control" value="<? echo $row['CONTATO'] ?>"
                                            readonly>
                                    </div>                                    
                                    <div class="col-sm-4 form-group">
                                        <label>Tipo</label>
                                        <input type="text" class="form-control" value="<? echo $row['TIPO'] ?>"
                                            readonly>
                                    </div>
                                    <div class="col-sm-4 form-group ">
                                        <label>Previsão</label>
                                        <input class="form-control" value="<? echo date(" d/m/Y H:i",
                                            strtotime($row['PREVISAO'])); ?>" readonly name="previsao"
                                            >
                                    </div>                                    
                                    <div class="col-sm-4 form-group ">
                                        <label>Sistema</label>
                                        <input type="text" class="form-control  " value="<? echo $row['SISTEMA'] ?>"
                                            readonly>
                                    </div>
                                    <div class="col-sm-4 form-group text-center">
                                        <label>Tipo</label>
                                        <select class="form-control text-center" id="exampleSelect1" name="select"
                                            size="1">
                                            <option selected class="test">Chamado</option>
                                            <option>Tarefa</option>
                                            <option>Projeto</option>
                                            <option>Treinamento</option>
                                            <option>Visita</option>
                                            <option>Apresentação</option>
                                            <option>Informativo</option>
                                            <option>Telefone</option>
                                            <option>Implatação</option>
                                            <option>Vendas</option>
                                            <option>Pós Venda/MKT</option>
                                            <option>Orçamento</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 form-group ">
                                        <label>Fechado</label>
                                        <input class="form-control" value="<? echo date(" d/m/Y H:i",
                                            strtotime($row['FECHADO'])); ?>" readonly name="fechado">                                            
                                    </div>
                                    <div class="col-sm-12 form-group   ">
                                        <label>Assunto</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3"
                                            readonly><?echo $row['OBS']?></textarea>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Telefone:</label>
                                        <input type="text" class="form-control" placeholder="..." readonly>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Remoto:</label>
                                        <input type="text" class="form-control" placeholder="..." readonly>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Login:</label>
                                        <input type="text" class="form-control" placeholder="..." readonly>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Senha:</label>
                                        <input type="text" class="form-control" placeholder="..." readonly>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label>Informações sobre:</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3"
                                            readonly></textarea>
                                    </div>

                                    <!--<div class="col-sm-12 reset-button">
                                                 <a href="#" class="btn btn-warning">Reset</a>
                                                 <a href="#" class="btn btn-success">Save</a>
                                             </div>-->

                                </div>
                            </div>
                        </div>                                                   
                                <div class="col-sm-12">
                                    <div class="panel panel-bd lobidrag">
                                        <div class="panel-heading text-center">
                                            <label>Opções</label>
                                        </div>
                                        <div class="panel-body">                                            
                                                <div class="col-sm-4 form-group">
                                                    <label>Previsão</label>
                                                    <input class="form-control" value="<? echo date(" d/m/Y H:i",
                                                    strtotime($row['PREVISAO'])); ?>"  name="previsao">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">  
                                                        <option value="<?echo $row['STATUS']?>"><?echo $row['STATUS']?></option>                                                      
                                                        <option value="0">Aberto</option>
                                                        <option value="1">Cancelado</option> 
                                                        <option value="2">Suspenso</option> 
                                                        <option value="3">Concluído</option> 
                                                        <option value="4">Em Analise</option> 
                                                        <option value="5">Em Andamento</option> 
                                                        <option value="6">Só em Visita</option> 
                                                        <option value="7">Necessitanto Avaliação</option> 
                                                        <option value="8">Orçamento Enviado</option> 
                                                        <option value="9">Orçamento Aprovado</option>                                                                                                                  
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 form-group ">
                                                    <label>Versão</label>
                                                    <input type="text" class="form-control" name="versao">                                                        
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Consultor</label>
                                                    <select class="form-control" name="funcionario" required>
                                                        <option value="<?echo $row['FUNCIONARIO']?>"><?echo $row['FUNCIONARIO']?></option>
                                                        <option value="1">Arnaldo</option>
                                                        <option value="26">Ailton</option>
                                                        <option value="3">Eduardo</option>
                                                        <option value="22">Leo</option>
                                                        <option value="23">Lucas</option>
                                                        <option value="29">Nando</option>
                                                        <option value="14">Isabel</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Dificuldade</label>
                                                    <select class="form-control" id="exampleSelect" name="dificuldade">
                                                        <option value="0">Muito Facil</option>
                                                        <option value="1">Fácil</option>
                                                        <option value="2">Normal Rápido</option>
                                                        <option value="3">Normal</option>
                                                        <option value="4">Normal Demorado</option>
                                                        <option value="5">Dificil</option>
                                                        <option value="6">Muito Dificil</option>
                                                        <option value="7">Expert</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 form-group ">
                                                    <label>Entendi</label>
                                                    <select class="form-control" id="exampleSelect" name="entendimento">
                                                        <option value="0">Escolha uma opção</option>
                                                        <option value="1">Arnaldo</option>
                                                        <option value="26">Ailton</option>
                                                        <option value="3">Eduardo</option>
                                                        <option value="22">Leo</option>
                                                        <option value="23">Lucas</option>
                                                        <option value="29">Nando</option>
                                                        <option value="14">Isabel</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 form-group ">
                                                    <label>Teste Cliente</label>
                                                    <select class="form-control" id="exampleSelect" name="tetecliente">
                                                        <option value="0">Escolha uma opção</option>    
                                                        <option value="1">Arnaldo</option>
                                                        <option value="26">Ailton</option>
                                                        <option value="3">Eduardo</option>
                                                        <option value="22">Leo</option>
                                                        <option value="23">Lucas</option>
                                                        <option value="29">Nando</option>
                                                        <option value="14">Isabel</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 form-group ">
                                                    <label>Teste CPC</label>
                                                    <select class="form-control" id="exampleSelect" name="tetelocal">
                                                        <option value="0">Escolha uma opção</option>
                                                        <option value="1">Arnaldo</option>
                                                        <option value="26">Ailton</option>
                                                        <option value="3">Eduardo</option>
                                                        <option value="22">Leo</option>
                                                        <option value="23">Lucas</option>
                                                        <option value="29">Nando</option>
                                                        <option value="14">Isabel</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3 form-check">
                                                    <label>&nbsp;&nbsp;&nbsp;Avisa</label><br>
                                                    <label class="radio-inline">
                                                        <input type="checkbox"  value="S" name="aviso"></label>
                                                </div>
                                                <div class="col-sm-3 form-check">
                                                    <label>&nbsp;&nbsp;&nbsp;Desenvolvimento</label ><br>
                                                    <label class="radio-inline">
                                                        <input type="checkbox" name="desenvolvimento" value="S"></label>
                                                </div>
                                                <div class="col-sm-3 form-check">
                                                    <label>&nbsp;&nbsp;&nbsp;Personalização
                                                        Exclusiva</label><br>
                                                    <label class="radio-inline">
                                                        <input type="checkbox"  value="S" name="personalizacao_exclusiva"></label>
                                                </div>
                                                <div class="col-sm-3 form-check">
                                                    <label>&nbsp;&nbsp;&nbsp;Elaborar
                                                        Manual/Fluxo</label><br>
                                                    <label class="radio-inline">
                                                        <input type="checkbox"  value="S" name="gerar_manual"></label>
                                                </div>
                                                <div class="col-sm-12 form-group form-group">
                                                    <label>Conclusão</label>
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"
                                                        value="<? echo $row['CONCLUSAO'] ?>"
                                                        name="conclusao"></textarea>
                                                </div>

                                                <div class="col-sm-12 form-group form-group text-center">
                                                    <button type="reset" class="btn btn-labeled btn-danger m-b-5"
                                                        data-toggle="tooltip" data-placement="top" title="Cancelar"><i
                                                            class="ti-cancel"></i>
                                                        <span class="btn "><i
                                                                class="glyphicon glyphicon-remove"></i></span>
                                                    </button>
                                                    &nbsp;
                                                    <button type="button" class="btn btn-labeled btn-warning m-b-5"
                                                        data-toggle="tooltip" data-placement="top" title="Anexar"><i
                                                            class="ti-cancel"></i>
                                                        <span class="btn"><i
                                                                class="glyphicon ghvr-buzz-out fa fa-file-text-o"></i></span>
                                                    </button>
                                                    &nbsp;
                                                    <button type="submit" class="btn btn-labeled btn-primary m-b-5 "
                                                        data-toggle="tooltip " data-placement="top" title="Enviar"><i
                                                            class="ti-cancel"></i>
                                                        <span class="btn"><i class="glyphicon glyphicon-ok"></i></span>
                                                    </button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            
                    </div>
                </section> <!-- /.content -->
            </form>
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2022 <a href="#">CPC Brasil Sistemas</a>.</strong> Todos os direitos reservados.
        </footer>
    </div>
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

    <!-- <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script> -->
</body>

</html>