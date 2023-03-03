<?
session_start();
include "sgbd/suporte.php";
 if (isset($_POST['empresa_razaosocial']))
 {
    $dml = "INSERT INTO EMPRESA (EMPRESA_CODIGO,EMPRESA_RAZAOSOCIAL, EMPRESA_CONDICAO, EMPRESA_CNPJ, EMPRESA_ENDERECO, EMPRESA_BAIRRO, EMPRESA_CIDADE, EMPRESA_UF, EMPRESA_CEP, CONTRATO, EMPRESA_TELEFONE, EMPRESA_DIRETOR, EMPRESA_EMAIL, EMPRESA_EMAIL_TI, EMPRESA_TIPOACESSO, EMPRESA_ENDACESSO, EMPRESA_USERSISTEMA, EMPRESA_SENHAACESSO, EMPRESA_CODUSERSIS, EMPRESA_SENHASIS, SENHA_CPD, LINKACESSOREMOTO, FUNCIONARIO_CODIGO) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $data = array($_POST['empresa_codigo'], $_POST['empresa_razaosocial'],$_POST['empresa_condicao'],$_POST['empresa_cnpj'],$_POST['empresa_endereco'],$_POST['empresa_bairro'],$_POST['empresa_cidade'],$_POST['empresa_uf'],$_POST['empresa_cep'], str_replace("/",".",$_POST['contrato']), $_POST['empresa_telefone'], $_POST['empresa_diretor'],$_POST['empresa_email'], $_POST['empresa_email_ti'], $_POST['empresa_tipoacesso'],$_POST['empresa_endacesso'],$_POST['empresa_usersistema'],$_POST['empresa_senhaacesso'],$_POST['empresa_codusersis'],$_POST['empresa_senhasis'],$_POST['senha_cpd'],$_POST['linkacessoremoto'],$_POST['funcionario_codigo']);  
    $dmlcmd = $suporte->prepare($dml);
    $dmlcmd->execute($data);  
  
 }
 

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
    <title>Listagem Clientes</title>

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
                    <i class="pe-7s-help1"></i>
                </div>
                <div class="header-title">
                    <h1>Listagem de Clientes</h1>
                    <small>CPC Brasil Sistemas</small>
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index.php"><i class="pe-7s-home"></i> Inicio</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </section>
            <!-- Main content -->
            
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 name="tarefa"></h4>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="dataTables_length">
                                        <div class="input-group custom-search-form">
                                                        <input type="search" class="form-control" placeholder="Pesquisar..." id="pesquisar">
                                                            <span class="input-group-btn">
                                                        <button onclick="searchData()" class="btn btn-success" type="button">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div>
                                </div>                              
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tarefa"
                                        class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ord</th>
                                                <th>Cliente</th>
                                                <th>Código</th>
                                                <th>Telefone</th>
                                                <th>CNPJ</th>                                                
                                                <th>Endereço de Acesso</th>
                                                <th>Usuário de Acesso</th>
                                                <th>Senha de Acesso</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <? 
                                                $sql = "select * from empresa where liberado = 'S' " ; // consulta do registro atual
                                                $cont = 1;
                                                foreach ($suporte->query($sql) as $rowinterno) { 
                                            
                                                ?>
                                            <tr>
                                                <td>
                                                    <? echo $cont; ?>
                                                </td>
                                                <td>
                                                <a href="info_clientes.php?cod=<? echo $rowinterno['EMPRESA_CODIGO']; ?>"> <? echo $rowinterno['EMPRESA_RAZAOSOCIAL']; ?></a>
                                                </td>
                                                <td>
                                                <? echo $rowinterno['EMPRESA_CODIGO']; ?>
                                                </td>
                                                <td>
                                                <? echo $rowinterno['EMPRESA_TELEFONE']; ?>
                                                </td>
                                                <td>
                                                <? echo $rowinterno['EMPRESA_CNPJ']; ?> 
                                                </td>                                                
                                                <td>
                                                <? echo $rowinterno['EMPRESA_ENDACESSO']; ?>
                                                </td>
                                                <td>
                                                <? echo $rowinterno['EMPRESA_USERACESSO']; ?>
                                                </td>
                                                <td>
                                                <? echo $rowinterno['EMPRESA_SENHAACESSO']; ?>
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
                    <!-- datamap -->
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">  
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Mensagens</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="lineChart2" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                        -->
                    <!-- datamap -->

                    
                </div> <!-- /.row -->
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
        <script>
         var search =  document.getElementById('pesquisar')
        search.addEventListener("keydown", function(event){
            if (event.key === "Enter")
            {
                searchData()
            }
        })
        function searchData(){
            window.location =  'index.php?search='+search.value
        }
   </script>
</body>

</html>