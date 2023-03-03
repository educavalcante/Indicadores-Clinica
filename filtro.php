<?
session_start();
//  if (isset($_POST['empresa_razaosocial']))
//  {
//     $dml = "INSERT INTO EMPRESA (EMPRESA_CODIGO,EMPRESA_RAZAOSOCIAL, EMPRESA_CONDICAO, EMPRESA_CNPJ, EMPRESA_ENDERECO, EMPRESA_BAIRRO, EMPRESA_CIDADE, EMPRESA_UF, EMPRESA_CEP, CONTRATO, EMPRESA_TELEFONE, EMPRESA_DIRETOR, EMPRESA_EMAIL, EMPRESA_EMAIL_TI, EMPRESA_TIPOACESSO, EMPRESA_ENDACESSO, EMPRESA_USERSISTEMA, EMPRESA_SENHAACESSO, EMPRESA_CODUSERSIS, EMPRESA_SENHASIS, SENHA_CPD, LINKACESSOREMOTO, FUNCIONARIO_CODIGO) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//     $data = array($_POST['empresa_codigo'], $_POST['empresa_razaosocial'],$_POST['empresa_condicao'],$_POST['empresa_cnpj'],$_POST['empresa_endereco'],$_POST['empresa_bairro'],$_POST['empresa_cidade'],$_POST['empresa_uf'],$_POST['empresa_cep'], str_replace("/",".",$_POST['contrato']), $_POST['empresa_telefone'], $_POST['empresa_diretor'],$_POST['empresa_email'], $_POST['empresa_email_ti'], $_POST['empresa_tipoacesso'],$_POST['empresa_endacesso'],$_POST['empresa_usersistema'],$_POST['empresa_senhaacesso'],$_POST['empresa_codusersis'],$_POST['empresa_senhasis'],$_POST['senha_cpd'],$_POST['linkacessoremoto'],$_POST['funcionario_codigo']);  
//     $dmlcmd = $suporte->prepare($dml);
//     $dmlcmd->execute($data);  
  
//  }
 

    //Abre a consulta uma linha só

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
    <title>Cenário - Suporte CPC Brasil</title>

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
                            <li disable><a href="#">Desfazer</a></li>
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
                            <i class="fa fa-pencil"></i><span>Orçamento</span>
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
                    <i class="fa fa-filter"></i>
                </div>
                <div class="header-title">                    
                    <h1>Filtros</h1>
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
                                <form class="col-sm-12">
                                <div class="col-sm-4 form-group text-center">
                                    <label>Data de:</label>
                                    <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                        <option selected class="test">Abertura</option>
                                        <option>Conclusão</option>
                                        <option>Previsão</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Início</label>
                                    <input type="datetime-local" class="form-control text-center" required>
                                </div>
                                <div class="col-sm-4 form-group text-center">
                                    <label>Final</label>
                                    <input type="datetime-local" class="form-control text-center" required>
                                </div>
                                <div class="col-sm-3 form-group ">
                                    <label>Informações</label>
                                    <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                        <option selected class="test">Tecnico</option>
                                        <option>Entendi</option>
                                        <option>Teste Cliente</option>
                                        <option>Teste CPC</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 form-group ">
                                    <label>Funcionario</label>
                                    <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                        <option selected class="test">Isabel</option>
                                        <option>Nando</option>
                                        <option>Arnaldo</option>
                                        <option>Ailton</option>
                                        <option>Leonardo</option>
                                        <option>Lucas</option>
                                        <option>Eduardo</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 form-group ">
                                    <label>Tipo</label>
                                    <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                        <option selected class="test">Selecione um opção</option>
                                        <option>Chamado</option>
                                        <option>Tarefa</option>
                                        <option>Projeto</option>
                                        <option>Treinamento</option>
                                        <option>Visita</option>
                                        <option>Apresentação</option>
                                        <option>Informativo</option>
                                        <option>Telefone</option>
                                        <option>Implatação</option>
                                        <option>Vendas</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 form-group ">
                                    <label>Situação</label>
                                    <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                        <option selected class="test">Selecione um opção</option>
                                        <option>Aberto</option>
                                        <option>Cancelado</option>
                                        <option>Suspenso</option>
                                        <option>Concluído</option>
                                        <option>Em analise</option>
                                        <option>Em andamento</option>
                                        <option>Só em visita ao cliente</option>
                                        <option>Necessitando atendimento</option>
                                    </select>
                                </div>                                                                  
                                    <div class="col-sm-4 form-group text-center">
                                        <label>Prioridade</label>
                                        <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                            <option selected class="test">Alta</option>
                                            <option>Baixa</option>
                                            <option>Normal</option>
                                            <option>Alta</option>
                                            <option>Urgente</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 form-group text-center">
                                        <label>Dificuldade</label>
                                        <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                            <option selected class="test">Muito Facil</option>
                                            <option>Fácil</option>
                                            <option>Normal Rápido</option>
                                            <option>Normal</option>s
                                            <option>Normal Demorado</option>
                                            <option>Dificil</option>
                                            <option>Muito Dificil</option>
                                            <option>Expert</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 form-group ">
                                    <label>Desenvolvimento</label>
                                    <select class="form-control text-center" id="exampleSelect1" name="select" size="1">
                                        <option selected class="test">Selecione um opção</option>
                                        <option>Todos</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                        </select>
                                </div>
                                      <div class="col-sm-12 form-group text-center">
                                        <label>Cliente:</label>
                                        <select class="form-control text-center"  name="empresa_razaosocial" size="1">
                                            <option value="<? echo $row['EMPRESA_RAZAOSOCIAL'] ?>"><? echo $row['EMPRESA_RAZAOSOCIAL'] ?></option>                                            
                                        </select>
                                    </div>  
                                                                                                                                              
                                    <div class="col-sm-12 reset-button btn">
                                        <button type="button" class="btn btn-labeled btn-danger m-b-5"
                                            data-toggle="tooltip" data-placement="top" title="Cancelar"><i
                                                class="ti-cancel"></i>
                                            <span class="btn"><i class="glyphicon glyphicon-remove"></i></span>
                                        </button>
                                        &nbsp;                                        
                                        &nbsp;
                                        <button type="button" class="btn btn-labeled btn-primary m-b-5"
                                            data-toggle="tooltip" data-placement="top" title="Aplicar"><i
                                                class="ti-cancel"></i>
                                            <span class="btn"><i class="glyphicon glyphicon-ok"></i></span>
                                        </button>
                                    </div>                                                                                                    
                                </form>
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