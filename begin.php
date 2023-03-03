<?
    include 'sgbd/fatura.php';
    if  (
        (isset($_SESSION["ID_CPC"])) &&
        (isset($_POST['password']))

    )
        
    {
        $sql = "SELECT codigo, nome FROM loginapp('".$_POST['username']."','".$_POST['password']."','".$_POST['sistema']."')";

        foreach ($fatura->query($sql) as $row)
        { 

        if ($row['NOME'] != '')
        {
            $_SESSION["USUARIONOME"] = $row['NOME'];
            $_SESSION["ID_CPC"]      = $row['CODIGO'];
            $_SESSION["SISTEMA"]     = $_POST['sistema'];
            $_SESSION["PAGINA"]      = 'dashboard';
        }
        else
        {
            $_SESSION["USUARIONOME"] = '';
            $_SESSION["ID_CPC"]      = '';
            $_SESSION["PAGINA"]      = '';
            $_SESSION["SISTEMA"]     = '';

        }
        
        }        
        
    }
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CPC Sistemas - SAPI <? if (isset($_SESSION["USUARIONOME"]) && ($_SESSION["USUARIONOME"] != "")) print $_SESSION["USUARIONOME"] ?></title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.svg" type="image/x-icon">
   <!-- Start Global Mandatory Style
   =====================================================================-->
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
   <!-- DataTables -->
   <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>

   <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins 
        =====================================================================-->
        <!-- Toastr css -->
        <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
        <!-- Monthly css -->
        <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
        <!-- End page Label Plugins 
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>
        <!-- End Theme Layout Style
        =====================================================================-->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-3.6.0.min.js" type="text/javascript"></script>
        <!-- jQuery Mask -->
        <script src="assets/plugins/jQuery/jquery.mask.min.js" type="text/javascript"></script>
        <!-- jquery-ui --> 
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- cpc -->
        <script src="assets/plugins/cpc/inputs.js" type="text/javascript"></script>


        <script src="assets/plugins/datatables/dataTables.min.js"></script>

        <style>
  .ui-autocomplete-loading {
    background: white url("assets/dist/img/ui-anim_basic_16x16.gif") right center no-repeat;
  }
  </style>



    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <a href="index.php" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <!--<b>A</b>H-admin-->
                        <img src="assets/dist/img/mini-logo.svg" alt="">
                    </span>
                    <span class="logo-lg">
                        <!--<b>Admin</b>H-admin-->
                        <img src="assets/dist/img/logo.svg" alt="">
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top ">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <? if (1==2) { ?>
                            <!-- Orders -->
                            <li class="dropdown messages-menu">
                               <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                                <i class="pe-7s-cart"></i>
                                <span class="label label-primary">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><i class="fa fa-shopping-basket"></i> 4 Orders</li>
                                <li>
                                    <ul class="menu">
                                        <li ><!-- start Order -->
                                         <a href="#" class="border-gray">
                                            <div class="pull-left">
                                                <img src="assets/dist/img/stethescope.png" class="img-thumbnail" alt="User Image"></div>
                                                <h4>stethescope</h4>
                                                <p><strong>total item:</strong> 21
                                                </p>
                                            </a>     
                                        </li>
                                        <li>
                                            <a href="#" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="assets/dist/img/nocontrol.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Nocontrol</h4>
                                                    <p><strong>total item:</strong> 11
                                                    </p>
                                                </a> 
                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                        <img src="assets/dist/img/lab.png" class="img-thumbnail" alt="User Image"></div>
                                                        <h4>lab</h4>
                                                        <p><strong>total item:</strong> 16
                                                        </p>
                                                    </a> 
                                                </li>
                                                <li class="nav-list">
                                                    <a href="#" class="border-gray">
                                                        <div class="pull-left">
                                                            <img src="assets/dist/img/therm.jpg" class="img-thumbnail" alt="User Image"></div>
                                                            <h4>Pressure machine</h4>
                                                            <p><strong>total item:</strong> 10
                                                            </p>
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="footer"><a href="#"> See all Orders <i class="fa fa-arrow-right"></i></a></li>
                                        </ul>
                                    </li>
                            <!-- Messages -->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-mail"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-envelope-o"></i>
                                    4 Messages</li>
                                    <li>
                                        <ul class="menu">
                                            <li><!-- start message -->
                                               <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar2.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Alrazy</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right">11.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Tanjil</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 12.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Jahir</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 10.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                               <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar4.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Shawon</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 09.00am</span>
                                                </a>       

                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <img src="assets/dist/img/avatar3.png" class="img-thumbnail" alt="User Image"></div>
                                                    <h4>Shipon</h4>
                                                    <p>Lorem Ipsum is simply dummy text of...
                                                    </p>
                                                    <span class="label label-success pull-right"> 03.00pm</span>
                                                </a>       
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See all messages <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-bell"></i>
                                    <span class="label label-warning">8</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-bell"></i> 8 Notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-inbox"></i> Inbox  <span class=" label-success label label-default pull-right">9</span></a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> New Order <span class=" label-success label label-default pull-right">3</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-money"></i> Payment Failed  <span class="label-success label label-default pull-right">6</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> Order Confirmation <span class="label-success label label-default pull-right">7</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> Update system status <span class=" label-success label label-default pull-right">11</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> client update <span class="label-success label label-default pull-right">12</span> </a>
                                            </li>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-cart-plus"></i> shipment cancel 
                                            <span class="label-success label label-default pull-right">2</span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                   <li class="footer">
                                   <a href="#"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-file"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-file"></i> 9 tasks</li>
                                    <li>
                                        <ul class="menu">
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        <i class="fa fa-check-circle"></i> Data table error
                                                        <span class="label-primary label label-default pull-right">35%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="35%" style="width: 35%">
                                                            <span class="sr-only">35% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                      <i class="fa fa-check-circle"></i>  Change theme color
                                                       <span class="label-success label label-default pull-right">55%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="55%" style="width: 55%">
                                                            <span class="sr-only">55% Complete (primary)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        <i class="fa  fa-check-circle"></i> Change the font-family 
                                                        <span class="label-info label label-default pull-right">60%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="60%" style="width: 60%">
                                                            <span class="sr-only">60% Complete (info)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> <!-- end task item -->
                                            <li> <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                       <i class="fa  fa-check-circle"></i> Animation should be skip
                                                       <span class="label-warning label label-default pull-right">80%</span>
                                                    </h3>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="80%"  style="width: 80%">
                                                            <span class="sr-only">80% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See all tasks <i class=" fa fa-arrow-right"></i></a></li>
                                </ul>

                            </li>
                            <? } ?>
                            <!-- user -->
                            <? if (isset($_SESSION['USUARIONOME']))
                               if ($_SESSION['USUARIONOME'] != '') { 
                                $sql = "SELECT foto FROM usuarios where codigo =".$_SESSION['ID_CPC'] ;
                                foreach ($fatura->query($sql) as $begin_row) {}
                                
                                ?>
                            <li class="dropdown dropdown-user admin-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <div class="user-image">
                                <? echo '<img class="img-circle" height="40" width="40" alt="User Image" src="data:image/bmp;base64,'.base64_encode( $begin_row['FOTO'] ).'"/><br>' ?>
                               <!--  <img src="assets/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image"> -->
                                </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?p=profile"><i class="fa fa-users"></i> Meu Perfil</a></li>
                                    <li><a href="#"><i class="fa fa-gear"></i> Configurações</a></li>
                                    <li><a href="index.php?p=login"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                            <? } ?>

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->