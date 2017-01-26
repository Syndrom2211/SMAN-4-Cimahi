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
                                    <div class="panel-heading"><h3 class="panel-title">Edit Link Yang Bersangkutan</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('halamandepan/prosesedit_sangkut'); ?>" method="POST" enctype="multipart/form-data">  
                                        <input type="hidden" name="id_sangkut" value="<?php echo $h->row('id_sangkut'); ?>">  
                                        	<hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Judul 1 : </label>
                                                <div class="col-sm-9">
                                                  <input name="judul_sangkut1" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('judul_sangkut1'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Link 1 : </label>
                                                <div class="col-sm-9">
                                                  <input name="link_sangkut1" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('link_sangkut1'); ?>">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Judul 2 : </label>
                                                <div class="col-sm-9">
                                                  <input name="judul_sangkut2" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('judul_sangkut2'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Link 2 : </label>
                                                <div class="col-sm-9">
                                                  <input name="link_sangkut2" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('link_sangkut2'); ?>">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Judul 3 : </label>
                                                <div class="col-sm-9">
                                                  <input name="judul_sangkut3" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('judul_sangkut3'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Link 3 : </label>
                                                <div class="col-sm-9">
                                                  <input name="link_sangkut3" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('link_sangkut3'); ?>">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Judul 4 : </label>
                                                <div class="col-sm-9">
                                                  <input name="judul_sangkut4" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('judul_sangkut4'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Link 4 : </label>
                                                <div class="col-sm-9">
                                                  <input name="link_sangkut4" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('link_sangkut4'); ?>">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Judul 5 : </label>
                                                <div class="col-sm-9">
                                                  <input name="judul_sangkut5" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('judul_sangkut5'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Link 5 : </label>
                                                <div class="col-sm-9">
                                                  <input name="link_sangkut5" type="text" class="form-control" id="inputEmail3" value="<?php echo $h->row('link_sangkut5'); ?>">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button class="btn btn-primary waves-effect waves-light m-b-5">Simpan</button>
                                                  <a href="<?php echo base_url('halamandepan'); ?>"><button type="button" class="btn btn-default waves-effect m-b-5">Kembali</button></a>
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