<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">List Admin</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="m-b-30">
                                            <button data-toggle="modal" data-target="#accordion-modal" class="btn btn-primary waves-effect waves-light">Tambah <i class="fa fa-plus"></i></button>
                                        </div>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('listadmin/prosestambah_listadmin'); ?>" method="POST" enctype="multipart/form-data">
                                        <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0">
                                                    <div class="panel-group panel-group-joined" id="accordion-test"> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                                                        Nama Admin
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseOne" class="panel-collapse collapse in"> 
                                                                <div class="panel-body">
                                                                	<input name="nama_admin" type="text" class="form-control" id="inputEmail3" placeholder="Masukan nama admin">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                                        Username
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseTwo" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Masukan username">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
                                                                        Password
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseThree" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<input name="password" type="password" class="form-control" id="inputEmail3" placeholder="Masukan password">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div id="collapseThree" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                    <input name="gambar_admin" type="hidden" class="form-control" id="inputEmail3" value="(Edit gambar ketika admin login)">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <button class="btn btn-primary waves-effect waves-light m-b-5" class="collapsed">Tambah</button>
                                                                </h4> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        </form>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                        	<th>No</th>
                                                            <th>Nama</th>
                                                            <th>Username</th>
                                                            <!-- <th>Username</th> -->
                                                            <th>Password</th>
                                                            <th>Gambar</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($lsa as $listadmin) {
                                                    ?>
                                                        <tr>
                                                        	<td><?php echo $i; ?></td>
                                                            <td><?php echo $listadmin->nama_admin; ?></td>
                                                            <td><?php echo $listadmin->username; ?></td>
                                                            <!-- <td><?php // echo $listsiswa->username_siswa; ?></td> -->
                                                            <td><?php echo $listadmin->password; ?></td>
                                                            <td><?php echo "<center><img width='100px' src='css/images/users/".$listadmin->gambar_admin."'/></center>"; ?></td>
                                                            <td class="actions">
                                                                <a href="<?php echo base_url().'listadmin/edit_listadmin/'.$listadmin->id_admin; ?>"><i class="fa fa-pencil"></i></a>
                                                                <a onclick="return confirm('Yakin mau hapus ?');" href="<?php echo base_url().'listadmin/hapus_listadmin/'.$listadmin->id_admin; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    $i++;
                                                	}
                                                    ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © SMAN 4 Cimahi.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->