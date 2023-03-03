<?php
$_SESSION['PAGINA'] ='un';
if (isset($_POST['tipo'])){
    //Insercao ou update dos campos
    $dml = "update or insert into unidadenegocio (codigo,nome, ccusto,ccustofin,ccustocontabil,ambulatorio,emergencia,uti,clinico,cirurgico,matmed,diarias,ativo ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) matching (codigo) returning codigo";
    $data = array($_POST['UN_INDICE'], $_POST['UN_NOME'], $_POST['UN_CCUSTO'], $_POST['UN_CCUSTOFIN'], $_POST['UN_CCUSTOCONTABIL'], $_POST['UN_AMBULATORIO'], $_POST['UN_EMERGENCIA'], $_POST['UN_UTI'], $_POST['UN_CLINICO'], $_POST['UN_CIRURGICO'], $_POST['UN_MATMED'], $_POST['UN_DIARIAS'], $_POST['UN_ATIVO']); 
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute($data);



    while ($rowdml = $dmlcmd->fetch(PDO::FETCH_ASSOC)) {
            $sql = "SELECT * FROM unidadenegocio where codigo =".$rowdml['CODIGO'] ; //consulta do registro inserido
    }
    }
else {
    $sql = "SELECT * FROM unidadenegocio where codigo =0".$_GET['id'] ; // consulta do registro atual

}

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
                                        <a class="btn btn-primary" href="index.php?p=un_list"> 
                                            <i class="fa fa-list"></i>  Listagem de Unidade de Negócio</a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                    <form action="index.php" method="POST" class="col-sm-6">
                                        <input type="hidden" name="tipo" value="U">
                                        <input type="hidden" name="UN_INDICE" value="<? print $row['CODIGO'] ?>">
                                        <div class="form-group">
                                                <label>Descricao</label>
                                                <input type="text" name="UN_NOME" value="<? print $row['NOME'] ?>" class="form-control" placeholder="Enter First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Cód Centro de Custo Estoque</label>
                                                <input type="text" name="UN_CCUSTO" value="<? print $row['CCUSTO'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Cód Centro de Custo Financeiro</label>
                                                <input type="text" name="UN_CCUSTOFIN" value="<? print $row['CCUSTOFIN'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Cód Centro de Custo Contábil</label>
                                                <input type="text" name="UN_CCUSTOCONTABIL" value="<? print $row['CCUSTOCONTABIL'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Ambulatório</label>
                                                <input type="text" name="UN_AMBULATORIO" value="<? print $row['AMBULATORIO'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Emergência</label>
                                                <input type="text" name="UN_EMERGENCIA" value="<? print $row['EMERGENCIA'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>UTI</label>
                                                <input type="text" name="UN_UTI" value="<? print $row['UTI'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Clínico</label>
                                                <input type="text" name="UN_CLINICO" value="<? print $row['CLINICO'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Cirúrgico</label>
                                                <input type="text" name="UN_CIRURGICO" value="<? print $row['CIRURGICO'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Mat/Med</label>
                                                <input type="text" name="UN_MATMED" value="<? print $row['MATMED'] ?>" class="form-control" placeholder="Enter last Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Diárias</label>
                                                <input type="text" name="UN_DIARIAS" value="<? print $row['DIARIAS'] ?>" class="form-control" placeholder="Enter last Name">
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
