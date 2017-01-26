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
                                    <div class="panel-heading"><h3 class="panel-title">Edit Hubungi Kami</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('halamandepan/prosesedit_hubungi'); ?>" method="POST" enctype="multipart/form-data">  
                                        <input type="hidden" name="id_hubungi" value="<?php echo $hu->row('id_hubungi'); ?>">  
                                        	<textarea name="hubungi_text" class="ckeditor" rows="9"><?php echo $hu->row('hubungi_text'); ?></textarea>
                                        	<hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Link Email : </label>
                                                <div class="col-sm-9">
                                                  <input name="link_email" type="text" class="form-control" id="inputEmail3" value="<?php echo $hu->row('link_email'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Link Facebook : </label>
                                                <div class="col-sm-9">
                                                  <input name="link_fb" type="text" class="form-control" id="inputEmail3" value="<?php echo $hu->row('link_fb'); ?>">
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