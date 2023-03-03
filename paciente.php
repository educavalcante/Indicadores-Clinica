<?php
$_SESSION['PAGINA'] ='paciente';
if (isset($_POST['tipo'])){
    //Insercao ou update dos campos
    $dml = "update or insert into paciente (codigopac, a_nome, segurado, apelido, convenio, convplano, matricula, cep, uf, cidade, bairro, endereco, cod_logradouro, numero, complemento, telefone, celular, telefone3, email, nasc".
           ") values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) matching (codigopac) returning codigopac";
    $data = array($_POST['CODIGOPAC'], $_POST['A_NOME'], $_POST['SEGURADO'], $_POST['APELIDO'], $_POST['CONVENIO'], 
                  $_POST['CONVPLANO'], $_POST['MATRICULA'], $_POST['CEP'], $_POST['UF'], $_POST['CIDADE'],
                  $_POST['BAIRRO'], $_POST['ENDERECO'], $_POST['COD_LOGRADOURO'], $_POST['NUMERO'], $_POST['COMPLEMENTO'], 
                  $_POST['TELEFONE'], $_POST['CELULAR'], $_POST['TELEFONE3'], $_POST['EMAIL'], $_POST['NASC']); 
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute($data);



    while ($rowdml = $dmlcmd->fetch(PDO::FETCH_ASSOC)) {
        $sql = "SELECT codigopac, a_nome,segurado, apelido, convenio, convplano, matricula, cep, uf, cidade, bairro, endereco, cod_logradouro, numero, complemento, telefone, celular, telefone3, email, nasc, identidade,rgorgao,dataexpedicao,rguf, certidaonasc,a_cpf, nacionalidade, pai, mae, naturalidade,uf_nasc, civil, escolaridade, sexo,trabalho,cor,etnia FROM paciente where codigopac =".$rowdml['CODIGOPAC'] ; //consulta do registro inserido
    }
    }
else {
    $sql = "SELECT codigopac, a_nome,segurado, apelido, convenio, convplano, matricula, cep, uf, cidade, bairro, endereco, cod_logradouro, numero, complemento, telefone, celular, telefone3, email, nasc, identidade,rgorgao,dataexpedicao,rguf, certidaonasc,a_cpf, nacionalidade, pai, mae, naturalidade,uf_nasc, civil, escolaridade, sexo,trabalho,cor,etnia FROM paciente where codigopac =0".$_GET['id'] ; // consulta do registro atual

}

foreach ($fatura->query($sql) as $row) {} //Abre a consulta uma linha só
?>

<!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                <form action="index.php" method="POST">
                    <div class="row">
                        <!-- Form controls -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="btn-group"> 
                                        <a class="btn btn-primary" href="index.php?p=paciente_list"> 
                                            <i class="fa fa-list"></i>  Listagem de Paciente </a>

                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <input type="hidden" name="tipo" value="U">
                                        <input type="hidden" name="CODIGOPAC" value="<? print $row['CODIGOPAC'] ?>">
                                        <div class="form-group col-sm-6">
                                                <label>Nome Completo</label>
                                                <input type="text" maxlength=40 name="A_NOME" value="<? print $row['A_NOME'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Titular</label>
                                                <input type="text" maxlength=40 name="SEGURADO" value="<? print $row['SEGURADO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Apelido (Nome social)</label>
                                                <input type="text" maxlength=40 name="APELIDO" value="<? print $row['APELIDO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Convênio</label>
                                                <input class="form-control convenio" type="text" maxlength=40 name="CONVENIO" value="<? print $row['CONVENIO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Plano</label>
                                                <input class="form-control plano" type="text" maxlength=40 name="CONVPLANO" value="<? print $row['CONVPLANO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Matrícula</label>
                                                <input type="text" maxlength=40 name="MATRICULA" value="<? print $row['MATRICULA'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Cep</label>
                                                <input class="form-control cep" type="numeric" maxlength=40 name="CEP" value="<? print $row['CEP'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Estado (U.F.)</label>
                                                <input class="form-control uf" type="text" maxlength=40 name="UF" value="<? print $row['UF'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Cidade</label>
                                                <input class="form-control cidade" type="text" maxlength=40 name="CIDADE" value="<? print $row['CIDADE'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label>Bairro</label>
                                                <input class="form-control bairro" type="text" maxlength=40 name="BAIRRO" value="<? print $row['BAIRRO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Endereço</label>
                                                <input class="form-control endereco" type="text" maxlength=40 name="ENDERECO" value="<? print $row['ENDERECO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Tipo Log.</label>
                                                <input type="text" maxlength=40 name="COD_LOGRADOURO" value="<? print $row['COD_LOGRADOURO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Número</label>
                                                <input type="text" maxlength=40 name="NUMERO" value="<? print $row['NUMERO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Complemento</label>
                                                <input type="text" maxlength=40 name="COMPLEMENTO" value="<? print $row['COMPLEMENTO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Telefone</label>
                                                <input class="form-control tel" type="tel" maxlength=40 name="TELEFONE" value="<? print $row['TELEFONE'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Celular</label>
                                                <input class="form-control cel" type="tel" maxlength=40 name="CELULAR" value="<? print $row['CELULAR'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Trabalho</label>
                                                <input class="form-control" type="tel" maxlength=40 name="TELEFONE3" value="<? print $row['TELEFONE3'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-8">
                                                <label>E-mail</label>
                                                <input class="form-control" type="email" maxlength=40 name="EMAIL" value="<? print $row['EMAIL'] ?>" class="form-control">
                                            </div>



                                            <div class="form-group col-sm-12">
                                                <label class="btn btn-primary col-sm-12"> Documentação</label>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Doc. Identidade</label>
                                                <input class="form-control " type="text" maxlength=40 name="IDENTIDADE" value="<? print $row['IDENTIDADE'] ?>">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Org. Emissor</label>
                                                <input class="form-control " type="text" maxlength=40 name="RGORGAO" value="<? print $row['RGORGAO'] ?>" >
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Dt. Exp</label>
                                                <input class="form-control" type="date" maxlength=40 name="DATAEXPEDICAO" value="<? print $row['DATAEXPEDICAO'] ?>">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>UF</label>
                                                <input class="form-control " type="text" maxlength=40 name="RGUF" value="<? print $row['RGUF'] ?>">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Nasc</label>
                                                <input class="form-control" type="text" name="NASC" value="<? print date('d/m/Y', strtotime($row['NASC'])) ?>">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Certidão Nasc</label>
                                                <input class="form-control " type="text" maxlength=40 name="CERTIDAONASC" value="<? print $row['CERTIDAONASC'] ?>">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>CPF</label>
                                                <input class="form-control cpf" type="text" maxlength=40 name="A_CPF" value="<? print $row['A_CPF'] ?>">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Nacionalidade</label>
                                                <input class="form-control nacionalidade" type="text" maxlength=40 name="NACIONALIDADE" value="<? print $row['NACIONALIDADE'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Pai</label>
                                                <input class="form-control " type="text" maxlength=40 name="PAI" value="<? print $row['PAI'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Mãe</label>
                                                <input class="form-control " type="text" maxlength=40 name="MAE" value="<? print $row['MAE'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Naturalidade</label>
                                                <input class="form-control " type="text" maxlength=40 name="NATURALIDADE" value="<? print $row['NATURALIDADE'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>UF Nasc</label>
                                                <input class="form-control uf" type="text" maxlength=40 name="UF_NASC" value="<? print $row['UF_NASC'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Estado Civil</label>
                                                <input class="form-control civil" type="text" maxlength=40 name="CIVIL" value="<? print $row['CIVIL'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Escolaridade</label>
                                                <input class="form-control escolaridade" type="text" maxlength=40 name="ESCOLARIDADE" value="<? print $row['ESCOLARIDADE'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Sexo</label>
                                                <input class="form-control sexo" type="text" maxlength=40 name="SEXO" value="<? print $row['SEXO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Profissão</label>
                                                <input class="form-control " type="text" maxlength=40 name="TRABALHO" value="<? print $row['TRABALHO'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Cor</label>
                                                <input class="form-control cor" type="text" maxlength=40 name="COR" value="<? print $row['COR'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Etnia</label>
                                                <input class="form-control etnia" type="text" maxlength=40 name="ETNIA" value="<? print $row['ETNIA'] ?>" class="form-control">
                                            </div>

                                    <div class="reset-button col-sm-12">
                                    <div class="col-sm-3"></div>
                                     <a href="#" class="btn btn-warning col-sm-2">Cancelar</a><div class="col-sm-3"></div>
                                     <button class="btn btn-primary col-sm-2">Salvar</button>
                                 </div>
                         </div>
                     </div>
                 </div>
             </div>
             </form>             
         </section> <!-- /.content -->
     </div> <!-- /.content-wrapper -->
