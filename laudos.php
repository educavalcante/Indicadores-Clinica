
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
                            <h1>Schedule</h1>
                            <small>Schedule list</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Schedule list</li>
                            </ol>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group"> 
                                            <a class="btn btn-success" href="#"> <i class="fa fa-plus"></i>  Add Schedule</a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                          <div class="panel-header">
                                            <div class="col-sm-4">
                                                <div class="dataTables_length">
                                                    <label>Display <select name="example_length">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> records per page</label>
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
                                      </div>
                                  </div>
                              </div>
                              <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Doctor Name</th>
                                            <th>Department Name</th>
                                            <th>Day</th>
                                            <th>start time</th>
                                            <th>End time</th>
                                            <th>Per patient time</th>
                                            <th>serial visibility</th>
                                            <th>status</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                         <td><input type="radio" name="radioGroup">
                                           <label>1</label>   
                                       </td>
                                       <td>shakib khan</td>
                                       <td>Neurology</td>
                                       <td>sunday</td>
                                       <td><span class="glyphicon glyphicon-time"></span> 8:00</td>
                                       <td><span class="glyphicon glyphicon-time"></span> 10:00</td>
                                       <td><span class="glyphicon glyphicon-time"></span> 5:00</td>
                                       <td>time</td>
                                       <td><span class="label-success label label-default">Active</span></td>

                                       <td>
                                        <button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                
                                <tr>
                                 <td>
                                     <input type="radio" name="radioGroup">
                                     <label>2</label>   
                                 </td>
                                 <td>musfiq rahim</td>
                                 <td>Neurology</td>
                                 <td>sunday</td>
                                 <td><span class="glyphicon glyphicon-time"></span> 8:00</td>
                                 <td><span class="glyphicon glyphicon-time"></span> 10:00</td>
                                 <td><span class="glyphicon glyphicon-time"></span> 5:00</td>
                                 <td>sequential</td>
                                 <td><span class="label-success label label-default">Active</span></td>

                                 <td>
                                    <button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr >
                             <td><input type="radio" name="radioGroup">
                               <label>3</label>   
                           </td>
                           <td>tamim khan</td>
                           <td>Neurology</td>
                           <td>sunday</td>
                           <td><span class="glyphicon glyphicon-time"></span> 8:00</td>
                           <td><span class="glyphicon glyphicon-time"></span> 10:00</td>
                           <td><span class="glyphicon glyphicon-time"></span> 5:00</td>
                           <td>Time</td>
                           <td><span class="label-success label label-default">Active</span></td>

                           <td>
                            <button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr >
                        <td>
                            <input type="radio" name="radioGroup">
                            <label>4</label>   
                        </td>
                        <td>mohmudullah </td>
                        <td>Neurology</td>
                        <td>sunday</td>
                        <td><span class="glyphicon glyphicon-time"></span> 8:00</td>
                        <td><span class="glyphicon glyphicon-time"></span> 10:00</td>
                        <td><span class="glyphicon glyphicon-time"></span> 5:00</td>
                        <td>sequential</td>
                        <td><span class="label-default label label-danger">Inactive</span></td>

                        <td>
                            <button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr >
                     <td><input type="radio" name="radioGroup">
                       <label>5</label>   
                   </td>
                   <td>shakib khan</td>
                   <td>Neurology</td>
                   <td>sunday</td>
                   <td><span class="glyphicon glyphicon-time"></span> 8:00</td>
                   <td><span class="glyphicon glyphicon-time"></span> 10:00</td>
                   <td><span class="glyphicon glyphicon-time"></span> 5:00</td>
                   <td>sequential</td>
                   <td><span class="label-default label label-danger">Inactive</span></td>

                   <td>
                    <button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </td>
            </tr>
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