<?
session_start();
$fatura = new PDO("firebird:dbname=localhost:faturasf;charset=UTF-8", "SYSDBA", "ajuda");
$sql = "select * from chamadaatual('".$_GET['painel']."')" ; // consulta do registro atual
    foreach ($fatura->query($sql) as $row) {} //Abre a consulta uma linha só
    $fatura->commit();
    $_session['fala'] = $row['DESCRICAO']." ".$row['LOCAL'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="-1">
<meta http-equiv="refresh" content="10">
<style type="text/css">
h1 {
		font-style: italic;
		font-weight: bold;
		font-size: 2.5em
		font-family: arial, sans-serif;
	}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CPC - Painel de Chamada</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
    
        <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
        <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Lobipanel css -->
        <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pace css -->
        <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- Themify icons -->
        <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- End Theme Layout Style
        =====================================================================-->
    </head>

    <body class="hold-transition sidebar-collapse sidebar-mini">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon"><i class="pe-7s-date"></i></div>
                    <div class="header-title">
                        <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>   
                        <h1>Painel de Chamada</h1>
                        <small>Listagem de Pacientes chamados</small>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <!-- Multiple panels with drag & drop -->
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Chamada Atual</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br><br><br><br>
                                    <h1><center><font size="100" face="Arial"><? print $row['DESCRICAO'] ?><p><br><? print $row['LOCAL'] ?></font></center></h1>
                                    <br><br><br><br>
                                    </div>
                                    <div class="panel-footer"><h2>
                                    <? print date('d/m/y H:i', strtotime($row['DATA'])) ?></h2>
                                    </div>
                                </div>
                            </div>
                                <div class="col-sm-6 col-md-4">
                                    <!-- Inverse Panel -->
                                    <div class="panel panel-inverse">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h4>Chamadas Anteriores</h4>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                        <ol>
                                        <?
                                            $sql = "select skip 1 * from chamadaanterior('".$_GET['painel']."')" ; // consulta do registro atual
                                            foreach ($fatura->query($sql) as $rowanterior) {
                                                print "<font ><li><h3>".$rowanterior['DESCRICAO']."<br>".$rowanterior['LOCAL']."<br>".date('d/m/y H:i', strtotime($rowanterior['DATA']))."<h3><p></font></li>";
                                            } //Abre a consulta uma linha sór
                                    
                                        ?>
                                            
                                            </ol>
                                            </div>
                                            <div class="panel-footer">
                                                
                                            </div>
                                        </div>
                                    </div>
                                                </section> <!-- /.content -->
                                            </div> <!-- /.content-wrapper -->
                                            <footer class="main-footer">
        <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
        <strong>Copyright &copy; 2020-<? print date('Y') ?> <a href="#">CPC Brasil Sistemas</a>.</strong> Todos os direitos reservados.
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
    <? if ($row['LOCAL'] != '') include  'speak/fala.php'; ?>