<aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                <?php
                 if (isset($_SESSION['USUARIONOME']))   
                 if ($_SESSION['USUARIONOME'] != '') {
                ?>
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image pull-left">
                        <? echo '<img class="img-circle" height="40" width="40" alt="User Image" src="data:image/bmp;base64,'.base64_encode( $begin_row['FOTO'] ).'"/><br>' ?>
                            <!-- <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image"> -->
                        </div>
                        <div class="info">
                            <h4>Bem Vindo</h4>
                            <p><? print $_SESSION['USUARIONOME'] ?></p>
                        </div>
                    </div>
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <?
                            $sql = "select link, icone, texto from sapimenulista(0".$_SESSION['SISTEMA'].",0".$_SESSION['ID_CPC'].")";
                            foreach ($fatura->query($sql) as $rowmenu) 
                            {
                        ?>                        
                        <li class="active">
                            <a href="<? print $rowmenu['LINK'] ?>"><i class="fa <? print $rowmenu['ICONE'] ?>"></i><span><? print $rowmenu['TEXTO'] ?></span>
                            </a>
                        </li>
                        <? } ?>
                        <? if (1==2) { ?>
                        <li class="active">
                            <a href="index.php?p=assistencia"><i class="fa fa-user-md"></i><span>Assistência</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?p=enfermagem"><i class="fa fa-user"></i><span>Enfermagem</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?p=escalas"><i class="fa fa-check-square-o"></i><span>Escalas</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?p=cadastro"><i class="fa fa-sitemap"></i><span>Cadastro</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?p=report"><i class="fa fa-file-text"></i><span>Relatórios</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="index.php?p=laudo"><i class="fa fa-file-text"></i><span>Laudos</span>
                            </a>
                        </li>
                        <? } if (1==2) { ?>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user-md"></i><span>Assistencia</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="forms_basic.html">Add Doctor</a></li>
                                <li><a href="table.html">Doctor list</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i><span>Enfermagem</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-patient.html">Add patient</a></li>
                                <li><a href="pt-list.html">patient list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-sitemap"></i><span>Department</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-department.html">Add Department</a></li>
                                <li><a href="dep-list.html">Department list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list-alt"></i> <span>Agenda</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-schedule.html">Add schedule</a></li>
                                <li><a href="sch-list.html">schedule list</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-check-square-o"></i><span>Appionment</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-app.html">Add appoinemnt</a></li>
                                <li><a href="app-list.html">Appionment list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-credit-card-alt"></i><span>payment</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add-payment.html">Add payment</a></li>
                                <li><a href="pay-list.html">payment list</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                              <i class="fa fa-file-text"></i><span>Relatórios</span>
                              <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="patient-wise-report.html">Patient wise Report</a></li>
                            <li><a href="doctor-wise-report.html">Doctor wise Report</a></li>
                            <li><a href="total-report.html">Total Report</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="widgets.html">
                            <i class="fa fa-user-circle-o"></i><span>Human Resources</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add-emp.html">Add Employee</a></li>
                            <li><a href="emp-list.html">employee list</a></li>
                            <li><a href="add-ns.html">Add Nurse</a></li>
                            <li><a href="ns-list.html">Nurse list</a></li>
                            <li><a href="add-ph.html">Add pharmacist</a></li>
                            <li><a href="ph-list.html">pharmacist list</a></li>
                            <li><a href="add-rep.html">Add Representative</a></li>
                            <li><a href="rep-list.html">Representative list</a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bed"></i><span>Bed Manager</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add-bed.html">Add Bed</a></li>
                            <li><a href="bed-list.html">Bed list</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-text-o"></i><span>Notice</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="add-notice.html">Add Notice</a></li>
                            <li><a href="not-list.html">Notice list</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="mailbox.html">
                         <i class="fa fa-envelope"></i><span> Mail</span>
                     </a>
                 </li>
                 <li>
                    <a href="widgets.html">
                        <i class="fa fa-shopping-bag"></i><span> Widgets</span> 
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text"></i><span>pages</span>
                        <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="register.html">Sign up</a></li>
                        <li><a href="login.html">Sign in</a></li>
                        <li><a href="forget_password.html">Forget password</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="505.html">505 Error</a></li>
                        <li><a href="blank.html">Blank Page</a></li>
                        <li><a href="profile.html">Profile page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-alt fw"></i><span> User Interface</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="calender.html">Calender</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="tabs.html">Tabs & accordian</a></li>
                        <li><a href="icons_fontawesome.html">Icons</a></li>
                        <li><a href="notification.html">Notifications</a></li>
                        <li><a href="profile.html">Modals</a></li>
                        <li><a href="gridSystem.html">grid</a></li>
                        <li><a href="slider.html">slider</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="labels-badges-alerts.html">Badges</a></li>
                        <li><a href="progressbars.html">progress bar</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="modals.html">
                        <i class="fa fa-window-maximize"></i><span> Modals</span> 
                    </a>
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-columns"></i><span> Layout</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="layout_fixed.html">Fixed layout</a></li>
                        <li><a href="layout_boxed.html">Boxed layout</a></li>
                        <li><a href="layout_collapsed_sidebar.html">collapsed layout</a></li>
                    </ul>
                </li>
                <? } ?>                
            </ul>
            <?php } ?>   

        </div> <!-- /.sidebar -->
    </aside>