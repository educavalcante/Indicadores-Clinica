<?php
$_SESSION['PAGINA'] ='medsol_list';
if (isset($_GET['delid'])){
    //deleção
    $dml = "delete from  medicosolicitante where indice =".$_GET['delid'];
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute();
}
?>
        <script>
            $(document).ready(function() {
                $('#medsol_list').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );

            
               </script>

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
                            <h1>Médico Solicitante</h1>
                            <small>Listagem</small>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group"> 
                                            <a class="btn btn-success" href="?p=medsol&tipo=I"> <i class="fa fa-plus"></i> Novo
                                            </a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                          <div class="table-responsive">
                                            <table id="medsol_list" class="display table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Editar</th>
                                                        <th>Cód</th>
                                                        <th>Tipo</th>
                                                        <th>Conselho</th>
                                                        <th>Nome</th>
                                                        <th>CPF</th>
                                                        <th>UF</th>
                                                        <th>Especialidade</th>
                                                        <th>Apagar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?
                                                        $sql = "SELECT indice, tipoconselho, cremeb, nome, cpf, uf, estado, tipo, especialidade, endereco, celular, bairro  from medicosolicitante order by nome";
                                                        foreach ($fatura->query($sql) as $row) {
                                                    ?>

                                                    <tr >  
                                                    <td>
                                                        <a href="?p=medsol&id=<? print $row['INDICE'] ?>"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                                        </button></a>
                                                    </td>
                                                     <td><? print $row['INDICE'] ?></td>
                                                     <td><? print $row['TIPOCONSELHO'] ?></td>
                                                     <td><? print $row['CREMEB'] ?></td>
                                                     <td><? print $row['NOME'] ?></td>
                                                     <td><? print $row['CPF'] ?></td>
                                                     <td><? print $row['UF'] ?></td>
                                                     <td><? print $row['ESPECIALIDADE'] ?></td>
                                                     <td>
                                                        <a href="?p=medsol_list&delid=<? print $row['INDICE'] ?>"  onclick="return confirm('Tem certeza que deseja deletar esse registro?');"><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-trash-o"></i>
                                                        </button></a>
                                                    </td>
                                                </tr>
                                                <? } ?>

                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </div>
</section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
