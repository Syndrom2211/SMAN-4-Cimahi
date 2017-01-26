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
                                        <h3 class="panel-title">History Pertanyaan B.Inggris</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>NIS</th>
                                                            <!-- <th>Username</th> -->
                                                            <th>Jurusan</th>
                                                            <th>Kelas</th>
                                                            <th>Tanggal</th>
                                                            <th>Jam</th>
                                                            <th>Jml Pertanyaan</th>
                                                            <th>Benar</th>
                                                            <th>Salah</th>
                                                            <th>Score</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                    	<?php 
                                                    	foreach($hin as $historyinggris){
                                                    	?>
                                                        <tr>
                                                            <td><?php echo $historyinggris->nis_siswa; ?></td>
                                                            <!-- <td><?php //echo $historyinggris->username_siswa; ?></td> -->
                                                            <td><?php echo $historyinggris->jurusan_siswa; ?></td>
                                                            <td><?php echo $historyinggris->kelas_siswa; ?></td>
                                                            <td><?php echo $historyinggris->tanggal; ?></td>
                                                            <td><?php echo $historyinggris->jam; ?></td>
                                                            <td><?php echo $historyinggris->jumlah_pertanyaan; ?></td>
                                                            <td><?php echo $historyinggris->benar; ?></td>
                                                            <td><?php echo $historyinggris->salah; ?></td>
                                                            <td><?php echo $historyinggris->score; ?></td>
                                                            <td><a onclick="return confirm('Yakin mau hapus ?');" href="<?php echo base_url().'historyinggris_tiga/hapus_historyinggris_tiga/'.$historyinggris->jam; ?>"><i class="fa fa-trash-o"></i></a></td>
                                                        </tr>
                                                        <?php
                                                    	}
                                                        ?>
                                                    </tbody>
                                                </table>
												<a href="historyinggris_depan"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Kembali</button></a>
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