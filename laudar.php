<script>
function loadXMLDoc() {
    if (window.confirm("Você quer inserir o laudo padrao?")) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("laudo").innerHTML =
      this.responseText;
    }
  };
  var texto = "laudos"+ document.getElementById("laudopadrao").value + ".txt";
  xhttp.open("GET", texto, true);
  xhttp.send();
}
}
</script>

<?php
$_SESSION['PAGINA'] ='laudar';

if (isset($_POST['INDICE'])){
    $dml = "update or insert into cpslaudo2 (indice, LAUDO, statusexame, LAUDOPADRAO, situacaoexame) values ("
    .$_POST['INDICE'].",'".$_POST['LAUDO']."','".$_POST['STATUS']."','".$_POST['LAUDOPADRAO']."','".$_POST['SITUACAO']."') matching (indice) returning INDICE";
    $dml = "update or insert into cpslaudo2 (indice, LAUDO, statusexame, LAUDOPADRAO, situacaoexame) values (?, ?, ?, ?, ?) matching (indice) returning INDICE";
    $data = array($_POST['INDICE'], $_POST['LAUDO'], $_POST['STATUS'], $_POST['LAUDOPADRAO'], $_POST['SITUACAO']); 
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute($data);
    while ($rowdml = $dmlcmd->fetch(PDO::FETCH_ASSOC)) {
            $sql = "SELECT cpslaudo2.INDICE, cpslaudo2.LAUDO, cpslaudo2.STATUSexame, cpslaudo2.LAUDOPADRAO, cpslaudo2.SITUACAOEXAME, cpslaudo1.numeroorigem FROM cpslaudo2 inner join cpslaudo1 on (cpslaudo1.codigocps = cpslaudo2.codigocps2) where cpslaudo2.indice =0".$rowdml["INDICE"];
    }
    }
else {
    $sql = "SELECT cpslaudo2.INDICE, cpslaudo2.LAUDO, cpslaudo2.STATUSEXAME, cpslaudo2.LAUDOPADRAO, cpslaudo2.SITUACAOEXAME, cpslaudo1.numeroorigem FROM cpslaudo2 inner join cpslaudo1 on (cpslaudo1.codigocps = cpslaudo2.codigocps2) where cpslaudo2.indice =0".$_GET['id'] ;

}

foreach ($fatura->query($sql) as $row) {}

$sqlpac = "select * from cpsdados(0".$row['NUMEROORIGEM'].")";
foreach ($fatura->query($sqlpac) as $rowpac) {}
?>
<!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">
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
                        <h1><? print $rowpac['LINHA1'] ?></h1>
                        <small><? print $rowpac['LINHA2'] ?></small>
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- Form controls -->
                        <form action="index.php" method="POST" class="col-sm-10">
                        <input type="hidden" name="INDICE" value = "<? print $row['INDICE'] ?>" >
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="btn-group"> 
                                        <a class="btn btn-primary" href="index.php?p=laudo"> 
                                            <i class="fa fa-list"></i>  Listagem</a>&nbsp;  

                                            <label>Status</label>
                                                <select name ="STATUS" >
                                                <? if ($row['STATUSEXAME'] != '') print '<option>'.$row['STATUSEXAME'].'</option>selected' ?>
                                                    <option></option>
                                                    <option>Aberto</option>
                                                    <option>Concluido</option>
                                                    <option>Pendente</option>
                                                    <option>Refazer</option>
                                                    <option>Refazer Contraste</option>
                                                    <option>Reavaliar</option>
                                                    <option>Cancelado</option>
                                                </select>
                                                <label>Condição</label>
                                                <select name= "SITUACAO" >
                                                    <? if ($row['SITUACAOEXAME'] != '') print '<option>'.$row['SITUACAOEXAME'].'</option>selected' ?>
                                                    <option></option>
                                                    <option>Normal</option>
                                                    <option>Alterado</option>
                                                    <option>Critico</option>
                                                    <option>Ind. Cirurgia</option>
                                                    <option>Urgente</option>
                                                </select>
                                                <button type=submit>Salvar alterações</button>

                                        </div>
                                    </div>
                                    <div class="panel-body">
                                    <label>Laudo Padrao</label>
                                            <select onchange= "loadXMLDoc()" id="laudopadrao" name="LAUDOPADRAO" class="form-control">                                                    
                                                <?php 
                                                    $sql = "SELECT LAUDOPADRAO FROM laudopadraolista(".$row['INDICE'].")" ;
                                                    foreach ($fatura->query($sql) as $row2) {
                                                ?>                                                    
                                                    <option><?php print $row2['LAUDOPADRAO'] ?></option>
                                                <?php } ?>
                                                </select>
                                      <div class="form-group">
                                      <label>Laudo</label>
                                        <textarea name = 'LAUDO' id='laudo' class="form-control"  rows="30"><? print $row['LAUDO'] ?></textarea>
                                        <label>Anotações</label>
                                        <textarea name = 'OBS' class="form-control" rows="5"></textarea>
                                    </div>
                                    

                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             
         </section> <!-- /.content -->
     </div> <!-- /.content-wrapper -->
