<? $_SESSION['PAGINA'] ='laudohist'; 
if (!isset($_SESSION['chkamb'])) $_SESSION['chkamb'] = TRUE;
if (!isset($_SESSION['chkemg'])) $_SESSION['chkemg'] = TRUE;
if (!isset($_SESSION['chkint'])) $_SESSION['chkint'] = TRUE;

if (!isset($_SESSION['chkrx'])) $_SESSION['chkrx'] = TRUE;
if (!isset($_SESSION['chkrm'])) $_SESSION['chkrm'] = TRUE;
if (!isset($_SESSION['chktc'])) $_SESSION['chktc'] = TRUE;
if (!isset($_SESSION['chkus'])) $_SESSION['chkus'] = TRUE;
if (!isset($_SESSION['chklab'])) $_SESSION['chklab'] = TRUE;

if (!isset($_SESSION['chkaberto'])) $_SESSION['chkaberto'] = TRUE;
if (!isset($_SESSION['chkconcluido'])) $_SESSION['chkconcluido'] = TRUE;
if (!isset($_SESSION['chkpendente'])) $_SESSION['chkpendente'] = TRUE;
if (!isset($_SESSION['chkcancelado'])) $_SESSION['chkcancelado'] = TRUE;
if (!isset($_SESSION['chkrefazer'])) $_SESSION['chkrefazer'] = TRUE;
if (!isset($_SESSION['chkrefazerc'])) $_SESSION['chkrefazerc'] = TRUE;
//if (!isset($_SESSION['chkreavaliar'])) $_SESSION['chkreavaliar'] = TRUE;


if (!isset($_SESSION['filtro']))
    $_SESSION['filtro']  = "";
if (!isset($_SESSION['de']))
    $_SESSION['de']  = date("m/d/y");
if (!isset($_SESSION['ate']))
    $_SESSION['ate'] = date("m/d/y");
$filtrotipo = "";
$filtroclasse = "";
$filtrostatus = "";
$filtrosql    = "";
if (!isset($_SESSION['chkaberto'])) $_SESSION['CODPAC']= "";

if (isset($_POST['DE'])) $_SESSION['de'] = $_POST['DE'];
if (isset($_GET['id'])) $_SESSION['CODPAC'] = $_GET['id'];
if (isset($_POST['ATE'])) $_SESSION['ate'] = $_POST['ATE'];
if (isset($_POST['FILTRO'])) $_SESSION['filtro'] = $_POST['FILTRO'];

if (isset($_POST['DE']))
{
    if (isset($_POST['AMB'])) $_SESSION['chkamb'] = $_POST['AMB']; else $_SESSION['chkamb'] = false;
    if (isset($_POST['EMG'])) $_SESSION['chkemg'] = $_POST['EMG']; else $_SESSION['chkemg'] = false;
    if (isset($_POST['INT'])) $_SESSION['chkint'] = $_POST['INT']; else $_SESSION['chkint'] = false;    
}

if (!$_SESSION['chkamb'] || !$_SESSION['chkint'] || !$_SESSION['chkemg'])
{
    $filtrotipo = ' where LVL_TIPOATD in (0';
    if ( $_SESSION['chkamb']) $filtrotipo = $filtrotipo.",1";
    if ($_SESSION['chkemg']) $filtrotipo = $filtrotipo.",2";
    if ($_SESSION['chkint']) $filtrotipo = $filtrotipo.",3";
    $filtrotipo = $filtrotipo.")";
    $filtrotipo = str_replace('0,','',$filtrotipo);
}

if (isset($_POST['DE']))
{
    if (isset($_POST['RX'])) $_SESSION['chkrx'] = $_POST['RX']; else $_SESSION['chkrx'] = false;
    if (isset($_POST['TC'])) $_SESSION['chktc'] = $_POST['TC']; else $_SESSION['chktc'] = false;
    if (isset($_POST['RM'])) $_SESSION['chkrm'] = $_POST['RM']; else $_SESSION['chkrm'] = false;
    if (isset($_POST['US'])) $_SESSION['chkus'] = $_POST['US']; else $_SESSION['chkus'] = false;
    if (isset($_POST['LAB'])) $_SESSION['chklab'] = $_POST['LAB']; else $_SESSION['chklab'] = false;    
}

if (isset($_POST['DE']))
{
    if (isset($_POST['ABERTO'])) $_SESSION['chkaberto'] = $_POST['ABERTO']; else $_SESSION['chkaberto'] = false;
    if (isset($_POST['CONCLUIDO'])) $_SESSION['chkconcluido'] = $_POST['CONCLUIDO']; else $_SESSION['chkconcluido'] = false;
    if (isset($_POST['PENDENTE'])) $_SESSION['chkpendente'] = $_POST['PENDENTE']; else $_SESSION['chkpendente'] = false;
    if (isset($_POST['CANCELADO'])) $_SESSION['chkcancelado'] = $_POST['CANCELADO']; else $_SESSION['chkcancelado'] = false;
//    if (isset($_POST['REAVALIAR'])) $_SESSION['chkreavaliar'] = $_POST['reavaliar']; else $_SESSION['chkreavaliar'] = false;
    if (isset($_POST['REFAZER'])) $_SESSION['chkrefazer'] = $_POST['REFAZER']; else $_SESSION['chkrefazer'] = false;    
    if (isset($_POST['REFAZERC'])) $_SESSION['chkrefazerc'] = $_POST['REFAZERC']; else $_SESSION['chkrefazerc'] = false;    
}

if (!$_SESSION['chkrx'] || !$_SESSION['chktc'] || !$_SESSION['chkrm'] || !$_SESSION['chkus'] || !$_SESSION['chklab'])
{
    if ($filtrotipo == "")
        $filtroclasse = " where LVL_TIPOPROC in ('0',";
    else
        $filtroclasse = " and LVL_TIPOPROC in ('0',";
    if ($_SESSION['chkrx']) $filtroclasse = $filtroclasse.",'RX'";
    if ($_SESSION['chktc']) $filtroclasse = $filtroclasse.",'TC'";
    if ($_SESSION['chkrm']) $filtroclasse = $filtroclasse.",'RM'";
    if ($_SESSION['chkus']) $filtroclasse = $filtroclasse.",'US'";
    if ($_SESSION['chklab']) $filtroclasse = $filtroclasse.",'Laboratorio'";
    $filtroclasse = $filtroclasse.")";
    $filtroclasse = str_replace("'0',","",$filtroclasse);
    $filtroclasse = str_replace("(,","(",$filtroclasse);
    $filtroclasse = str_replace("()","('')",$filtroclasse);
}


if (!$_SESSION['chkconcluido'] || !$_SESSION['chkaberto'] || !$_SESSION['chkpendente'] || !$_SESSION['chkrefazer'] || !$_SESSION['chkcancelado'] || !$_SESSION['chkrefazerc'])
{
    if (($filtrotipo == "") && ($filtroclasse == ""))
        $filtrostatus = " where LVL_STATUS in ('0',";
    else
        $filtrostatus = " and LVL_STATUS in ('0',";
    if ($_SESSION['chkaberto']) $filtrostatus = $filtrostatus.",'Aberto'";
    if ($_SESSION['chkconcluido']) $filtrostatus = $filtrostatus.",'Concluido'";
    if ($_SESSION['chkpendente']) $filtrostatus = $filtrostatus.",'Pendente'";
    if ($_SESSION['chkcancelado']) $filtrostatus = $filtrostatus.",'Cancelado'";
    if ($_SESSION['chkrefazer']) $filtrostatus = $filtrostatus.",'Refazer'";
    if ($_SESSION['chkrefazerc']) $filtrostatus = $filtrostatus.",'Refazer Contraste'";
    $filtrostatus = $filtrostatus.")";
    $filtrostatus = str_replace("'0',","",$filtrostatus);
    $filtrostatus = str_replace("(,","(",$filtrostatus);
    $filtrostatus = str_replace("()","('')",$filtrostatus);
}

if ($_SESSION['filtro'] !='') 
{
    if (($filtrotipo == "") && ($filtroclasse == "") && ($filtrostatus == ""))
    $iniciosql = ' where ';
    else
    $iniciosql = ' and ';
    $filtrosql = $iniciosql." ((lvl_codigocps containing '".$_SESSION['filtro']."') or (lvl_paciente containing '".$_SESSION['filtro']."') or (lvl_procedimento containing '".$_SESSION['filtro']."') or (lvl_numerolaudo containing '".$_SESSION['filtro']."'))";

}



$sql = "select * from laudoviewlista('where cpslaudo2.data between ''".str_replace('/','.',$_SESSION['de'])."'' and ''".str_replace('/','.',$_SESSION['ate'])." 23:59:59'' and cpslaudo1.codigopac =0".$_SESSION['CODPAC']."','order by cpslaudo2.data',1)".$filtrotipo.$filtroclasse.$filtrostatus.$filtrosql;
//print $sql;
?>

                <!-- =============================================== -->
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-box1"></i>
                        </div>
                        <div class="header-title">
                            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>   
                            <?
                                $sqlpac = "select * from cpsdadospac(0".$_SESSION['CODPAC'].")";
                                foreach ($fatura->query($sqlpac) as $rowpac) {}
                            
                            ?>
                            <h1><? print $rowpac['LINHA1'] ?> (Histórico de laudos)</h1>
                            <small><? print $rowpac['LINHA2'] ?></small>
                        </div>
                    </section>
                    <!-- Main content -->
                    <form action="." method="POST" class="col-sm-14>
                    
                    <section class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                     <div class="btn-group"> 
                                        <label for='AMB' class="btn btn-success"><input type='checkbox' id='AMB' name='AMB' onChange="this.form.submit()" <? if ( $_SESSION['chkamb']) print " checked" ?>>AMB</label>
                                        <label for='EMG' class="btn btn-default"><input type='checkbox' id='EMG' name='EMG' onChange="this.form.submit()" <? if ($_SESSION['chkemg']) print " checked" ?>>EMG</label>
                                        <label for='EMG' class="btn btn-success"><input type='checkbox' id='INT' name='INT' onChange="this.form.submit()" <? if ($_SESSION['chkint']) print " checked" ?>>INT</label>
                                     </div>
                                        &nbsp;
                                    <div class="btn-group"> 
                                        <label for='RX' class="btn btn-success"><input type='checkbox' id='RX' name='RX' onChange="this.form.submit()" <? if ($_SESSION['chkrx']) print " checked" ?>>RX</label>
                                        <label for='TC' class="btn btn-default"><input type='checkbox' id='TC' name='TC' onChange="this.form.submit()" <? if ($_SESSION['chktc']) print " checked" ?>>TC</label>
                                        <label for='RM' class="btn btn-success"><input type='checkbox' id='RM' name='RM' onChange="this.form.submit()" <? if ($_SESSION['chkrm']) print " checked" ?>>RM</label>
                                        <label for='US' class="btn btn-default"><input type='checkbox' id='US' name='US' onChange="this.form.submit()" <? if ($_SESSION['chkus']) print " checked" ?>>US</label>
                                        <label for='LAB' class="btn btn-success"><input type='checkbox' id='LAB' name='LAB' onChange="this.form.submit()" <? if ($_SESSION['chklab']) print " checked" ?>>LAB</label>
                                        &nbsp;De <input type="text" value="<? print $_SESSION['de'] ?>" name="DE" onblur="this.form.submit()"> Até <input type="text" name="ATE" value="<? print $_SESSION['ate'] ?>"  onblur="this.form.submit()">
                                        </div>
                                    <p>
                                    <div class="btn-group"> 
                                        <label for='ABERTO' class="btn btn-success"><input type='checkbox' id='ABERTO' name='ABERTO' onChange="this.form.submit()" <? if ($_SESSION['chkaberto']) print " checked" ?>>Aberto</label>
                                        <label for='CONCLUIDO' class="btn btn-default"><input type='checkbox' id='CONCLUIDO' name='CONCLUIDO' onChange="this.form.submit()" <? if ($_SESSION['chkconcluido']) print " checked" ?>>Concluido</label>
                                        <label for='PENDENTE' class="btn btn-success"><input type='checkbox' id='PENDENTE' name='PENDENTE' onChange="this.form.submit()" <? if ($_SESSION['chkpendente']) print " checked" ?>>Pendente</label>
                                        <label for='CANCELADO' class="btn btn-default"><input type='checkbox' id='CANCELADO' name='CANCELADO' onChange="this.form.submit()" <? if ($_SESSION['chkcancelado']) print " checked" ?>>Cancelado</label>
                                        <label for='REFAZERC' class="btn btn-success"><input type='checkbox' id='REFAZERC' name='REFAZERC' onChange="this.form.submit()" <? if ($_SESSION['chkrefazerc']) print " checked" ?>>Refazer Contraste</label>
                                        <label for='REFAZER' class="btn btn-default"><input type='checkbox' id='REFAZER' name='REFAZER' onChange="this.form.submit()" <? if ($_SESSION['chkrefazer']) print " checked" ?>>Refazer</label>
                                        &nbsp;Filtro <input type="text" value="<? print $_SESSION['filtro'] ?>" name="FILTRO" onblur="this.form.submit()">
                                        <!-- <label for='REAVALIAR' class="btn btn-success"><input type='checkbox' id='REAVALIAR' name='REAVALIAR' onChange="this.form.submit()" <? if ($_SESSION['chkreavaliar']) print " checked" ?>>Reavaliar por</label> -->
                                        </div>
                                    </div>


                                    <div class="panel-body">
                                        <div class="row">
                                        <? if (1==2) { ?>
                                          <div class="panel-header">
                                            <div class="col-sm-4">
                                                <div class="dataTables_length">
                                                    <label>Exibindo <select name="example_length">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> registros por pág</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="dataTables_length">
                                                 <a class="btn btn-default buttons-copy btn-sm" tabindex="0"><span>Copy</span></a>
                                                 <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"><span>CSV</span></a>
                                                 <a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0"><span>Excel</span></a>
                                                 <a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0"><span>PDF</span></a>
                                                 <a class="btn btn-default buttons-print btn-sm" tabindex="0"><span>Print</span></a>
                                                 
                                             </div>
                                         </div>
                                         <div class="col-sm-4">
                                            <div class="dataTables_length" id="example_length">
                                                <div class="input-group custom-search-form">
                                                    <input type="search" class="form-control" placeholder="search..">
                                                    <span class="input-group-btn">
                                                      <button class="btn btn-primary" type="button">
                                                          <span class="glyphicon glyphicon-search"></span>
                                                      </button>
                                                  </span>
                                              </div><!-- /input-group -->
                                          </div>
                                          <? } ?>

                                      </div>
                                  </div>
                              </div>
                              <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>CPS</th>
                                            <th>Laudo Padrao</th>
                                            <th>Tipo Atd</th>
                                            <th>Tipo Proc</th>
                                            <th>Dt/Hr Sol</th>
                                            <th>Procedimento</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?
                                        foreach ($fatura->query($sql) as $row) 
                                        {
                                    ?>
                                        <tr >
                                        <td><? print $row['LVL_CODIGOCPS'] ?></td>
                                        <td><input type="text" value="<? print $row['LVL_NUMEROLAUDO'].' - '.$row['LVL_LAUDOPADRAO'] ?>" class="form-control" readonly></td>
                                       <td><label for='AMB' class="btn btn-success"><? if ($row['LVL_TIPOATD'] == '1') print "AMB";  if ($row['LVL_TIPOATD'] == '2') print "EMG";  if ($row['LVL_TIPOATD'] == '3') print "INT";  ?></label></td>
                                       <td><? print $row['LVL_TIPOPROC'] ?></td>
                                       <td><span class="glyphicon glyphicon-time"></span> <? print date('d/m/y H:i', strtotime($row['LVL_DTSOLICITACAO']))  ?></td>
                                       <td><input type="text" value="<? print $row['LVL_PROCEDIMENTO'] ?>" class="form-control" readonly></td>
                                       <td><span class="label-success label label-default"><? print $row['LVL_STATUS'] ?></span></td>

                                </tr>
                                <tr >
                                        
                                        <td colSpan=7><textarea name = 'LAUDO' id='laudo' class="form-control"  rows="15" readonly><? print $row['LVL_LAUDO'] ?></textarea></td>
                                <? } ?>                                
        </tbody>
    </table>
</div>
<? if (1==2) { ?>
<div class="page-nation text-right">
    <ul class="pagination pagination-large">
        <li class="disabled"><span>«</span></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li class="disabled"><span>...</span></li><li>
        <li><a rel="next" href="#">Next</a></li>
    </ul>
</div>
<? } ?>
</div>
</div>
</div>
</div>
</section> <!-- /.content -->
</form>
</div> <!-- /.content-wrapper -->
