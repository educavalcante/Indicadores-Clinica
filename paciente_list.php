<?php
$_SESSION['PAGINA'] ='paciente_list';
if (isset($_GET['id'])){
    //Insercao ou update dos campos
    $dml = "delete from  paciente where codigopac =".$_GET['id'];
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute();
}
?>
        <script>
            $(document).ready(function() {
                $('#paciente_list').DataTable( {
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
                                        <form name="fromsql" method="POST" action=".">
                                            <a class="btn btn-success" href="?p=paciente&tipo=I"> <i class="fa fa-plus"></i> Novo
                                            </a> Busca no banco de dados<input type="text" name= "busca" value="<? if (isset($_POST['busca'])) echo $_POST['busca'];  ?>"><input type="submit"></form>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                          <div class="table-responsive">
                                            <table id="paciente_list" class="display table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Editar</th>
                                                        <th>Cód</th>
                                                        <th>Nome</th>
                                                        <th>Nasc</th>
                                                        <th>Convênio</th>
                                                        <th>CPF</th>
                                                        <th>Celular</th>
                                                        <th>Mãe</th>
                                                        <th>Apagar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?
                                                    if (!isset($_POST['busca']))
                                                        $where = " where paciente.codigopac >= gen_id(gen_codigopac,0)-50 ";
                                                    else
                                                    {
                                                        $filtro = $_POST['busca'];
                                                        $where = " where a_nome containing '".$filtro."'".
                                                                " or mae containing '".$filtro."'".
                                                                " or matricula containing '".$filtro."'".
                                                                " or a_cpf containing '".$filtro."'".
                                                                " or celular containing '".$filtro."'";

                                                    }
                                                    

                                                        $sql = "SELECT first 100 CAST(paciente.codigopac as integer) codigopac, paciente.a_nome, paciente.nasc, (select convenio.a_nome from convenio where convenio = paciente.convenio) convenio, paciente.a_cpf, paciente.celular, paciente.mae  from paciente ".$where." order by paciente.a_nome";
                                                        foreach ($fatura->query($sql) as $row) {
                                                    ?>

                                                    <tr >  
                                                    <td>
                                                        <a href="?p=paciente&id=<? print $row['CODIGOPAC'] ?>"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                                        </button></a>
                                                    </td>
                                                     <td><? print $row['CODIGOPAC'] ?></td>
                                                     <td><? print $row['A_NOME'] ?></td>
                                                     <td><? print $row['NASC'] ?></td>
                                                     <td><? print $row['CONVENIO'] ?></td>
                                                     <td><? print $row['A_CPF'] ?></td>
                                                     <td><? print $row['CELULAR'] ?></td>
                                                     <td><? print $row['MAE'] ?></td>
                                                     <td>
                                                        <a href="?p=paciente_list&id=<? print $row['CODIGOPAC'] ?>"><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-trash-o"></i>
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
<div id="ordine" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Update table</h4>
    </div>
    <div class="modal-body">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="table.html"> <i class="fa fa-list"></i>  Doctor List </a>  
                </div>
            </div>
            <div class="panel-body">

                <form class="col-sm-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" placeholder="Enter Designation" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="select" size="1">
                            <option selected class="test">Neurology</option>
                            <option>Gynaecology</option>
                            <option>Microbiology</option>
                            <option>Pharmacy</option>
                            <option>Neonatal</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" placeholder="Enter Phone number" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="picture" id="picture">
                        <input type="hidden" name="old_picture">
                    </div>

                    <div class="form-group">
                        <label>Short Biography</label>
                        <textarea id="some-textarea" class="form-control" rows="6" placeholder="Enter text ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Specialist</label>
                        <input type="text" class="form-control" placeholder="Specialist" required>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input name="date_of_birth" class="datepicker form-control hasDatepicker" type="text" placeholder="Date of Birth">
                    </div>
                    <div class="form-group">
                        <label>Blood group</label>
                        <select class="form-control">
                            <option>A+</option>
                            <option>AB+</option>
                            <option>O+</option>
                            <option>AB-</option>
                            <option>B+</option>
                            <option>A-</option>
                            <option>B-</option>
                            <option>O-</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                     <label>Sex</label><br>
                     <label class="radio-inline">
                         <input type="radio" name="sex" value="1" checked="checked">Male</label> 
                         <label class="radio-inline"><input type="radio" name="sex" value="0" >Female</label>                                     
                         
                     </div>
                     <div class="form-check">
                      <label>Status</label><br>
                      <label class="radio-inline">
                       <input type="radio" name="status" value="1" checked="checked">Active</label>
                       <label class="radio-inline">
                          <input type="radio" name="status" value="0" >Inctive
                      </label>
                  </div>                                       
                  
                  <div class="reset button">
                     <a href="#" class="btn btn-primary">Reset</a>
                     <a href="#" class="btn btn-success">Save</a>
                 </div>
             </form>
         </div>
     </div>

 </div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>

</div> <!-- /.content-wrapper -->
