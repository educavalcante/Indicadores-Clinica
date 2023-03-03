
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
                        <h1>Documentos/Imagens</h1>
                        <small>Relação</small>
                    </div>
                </section>
                <!-- Main content -->

                <section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            
                              <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Descrição</th>
                                            <th>Data</th>
                                            <th>Detalhe</th>
                                            <th>Extensão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?
                                        include 'sgbd/imagens.php';
                                        $sql = "select numero, nome, data, coalesce(extensao,'arq') extensao, descricao from imagens where tipo = '".$_GET['tipo']."'"; // consulta do registro atual
                                        foreach ($imagens->query($sql) as $row) { //Abre a consulta uma linha só
                                    ?>

                                        <tr >  
                                           <td><a target=_new href="imagensfile.php?id=<? print $row['NUMERO'] ?>"><img src="assets/dist/img/files/<? print $row['EXTENSAO'] ?>.png" class="img-circle" alt="User Image" height="50" width="50"></a></td>
                                           <td><? print $row['NOME'] ?></td>
                                           <td><? print date('d/m/Y',strtotime($row['DATA'])) ?></td>
                                           <td><? print $row['DESCRICAO'] ?></td>
                                           <td><? print $row['EXTENSAO'] ?></td>
                                    </tr>
                                    <? } ?>
                </tbody>
            </table>
        </div>
        <div class="page-nation text-right">
            <ul class="pagination pagination-large">
                <li class="disabled"><span>«</span></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li class="disabled"><span>...</span></li><li>
                <li><a rel="next" href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</section> <!-- /.content -->

</div> <!-- /.content-wrapper -->
