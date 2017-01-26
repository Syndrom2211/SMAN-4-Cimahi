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
                                        <h3 class="panel-title">Waktu Test</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatabletanya" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Mata Kuliah</th>
                                                            <th>Waktu</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                             		
                                                    <tbody>
                                                    	<?php
                                                    	$i = 1;
                                                    	foreach($wak as $waktutest){
                                                    	?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $waktutest->matkul; ?></td>
                                                            <td><?php echo $waktutest->waktu." Menit"; ?></td>
                                                            <td class="actions">
                                                                <a href="<?php echo base_url().'waktutest/edit_waktutest/'.$waktutest->id_waktu; ?>"><i class="fa fa-pencil"></i></a>
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