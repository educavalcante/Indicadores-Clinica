<?php
$_SESSION['PAGINA'] ='medsol';
if (isset($_POST['tipo'])){
    //Insercao ou update dos campos
    $dml = "update or insert into  medicosolicitante ( indice, tipoconselho, cremeb, nome, especialidade ) values (?, ?, ?, ?, ?) matching (indice) returning indice";
    $data = array($_POST['INDICE'], $_POST['TIPOCONSELHO'], $_POST['CREMEB'], $_POST['NOME'], $_POST['ESPECIALIDADE']); 
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute($data);



    while ($rowdml = $dmlcmd->fetch(PDO::FETCH_ASSOC)) {
            $sql = "SELECT * FROM medicosolicitante where indice =".$rowdml['INDICE'] ; //consulta do registro inserido
    }
    }
else if (isset($_GET['id']) && ($_GET['id']!='')){
    $sql = "SELECT * FROM medicosolicitante where indice =0".$_GET['id'] ; // consulta do registro atual
}

if (isset($_GET['tipo']) && ($_GET['tipo']=='I'))
{
    //indice, tipoconselho, cremeb, nome, especialidade
    $row = array("INDICE"=>"0",
                 "TIPOCONSELHO"=>"CRM",
                 "CREMEB"=>"",
                 "NOME"=>"",
                 "ESPECIALIDADE"=>""
                     );
}
else
    foreach ($fatura->query($sql) as $row) {} //Abre a consulta uma linha só
?>

<!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- Form controls -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="btn-group"> 
                                        <a class="btn btn-primary" href="index.php?p=medsol_list"> 
                                            <i class="fa fa-list"></i>  Listagem de Médico Solicitante</a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                    <form action="index.php" method="POST" class="col-sm-6">
                                        <input type="hidden" name="tipo" value="U">
                                        <input type="hidden" name="INDICE" value="<? print $row['INDICE'] ?>">
                                        <div class="form-group">
                                                <label>Tipo Conselho</label>
                                                <input type="text" name="TIPOCONSELHO" value="<? print $row['TIPOCONSELHO'] ?>" class="form-control" placeholder="Enter First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Conselho</label>
                                                <input type="text" name="CREMEB" value="<? print $row['CREMEB'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" name="NOME" value="<? print $row['NOME'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Especialidade</label>
                                                <input type="text" name="ESPECIALIDADE" value="<? print $row['ESPECIALIDADE'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>                               
                                            <div class="form-check">
                                          <label>Status</label><br>
                                          <label class="radio-inline"><input type="radio" name="UN_ATIVO" value="1" checked="checked">Active</label> <label class="radio-inline"><input type="radio" name="status" value="0" >Inctive</label>
                                      </div>                                       

                                    <div class="reset-button">
                                     <a href="#" class="btn btn-warning">Cancelar</a>
                                     <button class="btn btn-primary">Salvar</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             
         </section> <!-- /.content -->
     </div> <!-- /.content-wrapper -->
