<?php
$_SESSION['PAGINA'] ='ala';
if (isset($_POST['tipo'])){
    //Insercao ou update dos campos
    $dml = "update or insert into ALAS (a_nome, a_ala, tamanho, diaria, quantidade, resumo, a_ativo ) values (?, ?, ?, ?, ?, ?, ?) matching (a_ala) returning a_ala";
    $data = array($_POST['ALA_DESCRICAO'], $_POST['ALA_INDICE'], $_POST['ALA_TAMANHO'], $_POST['ALA_DIARIA'], $_POST['ALA_QUANTIDADE'], $_POST['ALA_RESUMO'], $_POST['ALA_ATIVO']); 
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute($data);



    while ($rowdml = $dmlcmd->fetch(PDO::FETCH_ASSOC)) {
            $sql = "SELECT * FROM alas where a_ala =".$rowdml['A_ALA'] ; //consulta do registro inserido
    }
    }
else {
    $sql = "SELECT * FROM alas where a_ala =0".$_GET['id'] ; // consulta do registro atual

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
                                        <a class="btn btn-primary" href="pt-list.html"> 
                                            <i class="fa fa-list"></i>  Listagem de Usuários </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                    <form action="index.php" method="POST" class="col-sm-6">
                                        <input type="hidden" name="tipo" value="U">
                                        <input type="hidden" name="ALA_INDICE" value="<? print $row['A_ALA'] ?>">
                                        <div class="form-group">
                                                <label>Descricao</label>
                                                <input type="text" name="ALA_DESCRICAO" value="<? print $row['A_NOME'] ?>" class="form-control" placeholder="informe o nome" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Metragem</label>
                                                <input type="text" name="ALA_TAMANHO" value="<? print $row['TAMANHO'] ?>" class="form-control" placeholder="informe a metragem">
                                            </div>
                                            <div class="form-group">
                                                <label>Diaria</label>
                                                <input type="text" name="ALA_DIARIA" value="<? print $row['DIARIA'] ?>" class="form-control" placeholder="informe valor da diaria">
                                            </div>
                                            <div class="form-group">
                                                <label>Leitos por quarto</label>
                                                <input type="text" name="ALA_QUANTIDADE" value="<? print $row['QUANTIDADE'] ?>" class="form-control" placeholder="informe os leitos por quarto">
                                            </div>
                                            <div class="form-group">
                                                <label>Resumo</label>
                                                <input type="text" name="ALA_RESUMO" value="<? print $row['RESUMO'] ?>" class="form-control" placeholder="informe o resumo">
                                            </div>
                                            <div class="form-check">
                                            <input type="checkbox" id="ALA_ATIVO" unvalue = "N" value = "S" name="ALA_ATIVO" <? if ($row['A_ATIVO'] == 'S') print " checked"   ?><label for="ALA_ATIVO">Ativo</label>
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
