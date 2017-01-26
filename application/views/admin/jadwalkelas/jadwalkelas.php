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
                                        <h3 class="panel-title">Jadwalkelas</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="m-b-30">
                                            <button data-toggle="modal" data-target="#accordion-modal" class="btn btn-primary waves-effect waves-light">Tambah <i class="fa fa-plus"></i></button>
                                        </div>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('jadwalkelas/prosestambah_jadwalkelas'); ?>" method="POST" enctype="multipart/form-data">
                                        <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0">
                                                    <div class="panel-group panel-group-joined" id="accordion-test"> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                                                        Bulan/Tanggal/Tahun
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseOne" class="panel-collapse collapse in"> 
                                                                <div class="panel-body">
                                                                	<input name="hari" type="text" class="form-control" id="datepicker" placeholder="Masukan Bulan/Tanggal/Tahun">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                                        Kelas
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseTwo" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<input name="kelas" type="text" class="form-control" id="inputEmail3" placeholder="Masukan Kelas">
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
                                                            <th>Bulan/Tanggal/Tahun</th>
                                                            <th>Kelas</th>
                                                            <th>Aksi</th>
                                                            <!-- <th>Username</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($jdl as $jadwalkelas) {
                                                    ?>
                                                        <tr>
                                                        	<td><?php echo $i; ?></td>
                                                            <td><?php echo $jadwalkelas->hari; ?></td>
                                                            <td><?php echo $jadwalkelas->kelas; ?></td>
                                                            <!-- <td><?php // echo $listsiswa->username_siswa; ?></td> -->
                                                            <td class="actions">
                                                                <a href="<?php echo base_url().'jadwalkelas/edit_jadwalkelas/'.$jadwalkelas->id_jadwal; ?>"><i class="fa fa-pencil"></i></a>
                                                                <a onclick="return confirm('Yakin mau hapus ?');" href="<?php echo base_url().'jadwalkelas/hapus_jadwalkelas/'.$jadwalkelas->id_jadwal; ?>"><i class="fa fa-trash-o"></i></a>
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