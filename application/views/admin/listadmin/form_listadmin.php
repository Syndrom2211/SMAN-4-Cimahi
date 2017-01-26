			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                        <!-- Horizontal form -->
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Edit List Admin</h3></div>
                                    <div class="panel-body">
                                        <?php echo form_open_multipart('listadmin/prosesedit_listadmin'); ?>
                                        <input type="hidden" name="id_admin" value="<?php echo $lsi->row('id_admin'); ?>">  
                                        	<hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Nama : </label>
                                                <div class="col-sm-9">
                                                  <input name="nama_admin" type="text" class="form-control" id="inputEmail3" value="<?php echo $lsi->row('nama_admin'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Username : </label>
                                                <div class="col-sm-9">
                                                  <input name="username" type="text" class="form-control" id="inputEmail3" value="<?php echo $lsi->row('username'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Password : </label>
                                                <div class="col-sm-9">
                                                  <input name="password" type="text" class="form-control" id="inputEmail3" placeholder="Masukan password baru">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Gambar : </label>
                                                <div class="col-sm-9">
                                                  <input type="file" name="userfile" size="20" />
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <input type="submit" name="go_update" class="btn btn-primary waves-effect waves-light m-b-5" value="Simpan" />
                                                  <a href="<?php echo base_url('listadmin'); ?>"><button type="button" class="btn btn-default waves-effect m-b-5">Kembali</button></a>
                                                </div>
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                    </div> <!-- container -->
                               
                </div> <!-- content -->
            </div>
                <footer class="footer text-right">
                    2015 © SMAN 4 Cimahi.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->