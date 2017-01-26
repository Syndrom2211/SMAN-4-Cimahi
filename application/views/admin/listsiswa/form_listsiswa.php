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
                                    <div class="panel-heading"><h3 class="panel-title">Edit List Siswa</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('listsiswa/prosesedit_listsiswa'); ?>" method="POST" enctype="multipart/form-data">  
                                        <input type="hidden" name="id_listsiswa" value="<?php echo $lsi->row('id_listsiswa'); ?>">  
                                        	<hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">NIS : </label>
                                                <div class="col-sm-9">
                                                  <input name="nis_siswa" type="text" class="form-control" id="inputEmail3" value="<?php echo $lsi->row('nis_siswa'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Nama : </label>
                                                <div class="col-sm-9">
                                                  <input name="nama_siswa" type="text" class="form-control" id="inputEmail3" value="<?php echo $lsi->row('nama_siswa'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Username : </label>
                                                <div class="col-sm-9">
                                                  <input name="username_siswa" type="text" class="form-control" id="inputEmail3" value="<?php echo $lsi->row('username_siswa'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Password : </label>
                                                <div class="col-sm-9">
                                                  <input name="password_siswa" type="text" class="form-control" id="inputEmail3" placeholder="Masukan password baru">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Kelas : </label>
                                                <div class="col-sm-9">
                                                  <select name="kelas_siswa">
                                                  	<option value="1">1</option>
                                                  	<option value="2">2</option>
                                                  	<option value="3">3</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Jurusan : </label>
                                                <div class="col-sm-9">
                                                  <select name="jurusan_siswa">
                                                        <option value="IPA">IPA</option>
                                                        <option value="IPS">IPS</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button class="btn btn-primary waves-effect waves-light m-b-5">Simpan</button>
                                                  <a href="<?php echo base_url('listsiswa'); ?>"><button type="button" class="btn btn-default waves-effect m-b-5">Kembali</button></a>
                                                </div>
                                            </div>
                                        </form>
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