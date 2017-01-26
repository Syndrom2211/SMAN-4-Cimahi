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
                                    <div class="panel-heading"><h3 class="panel-title">Edit Misi</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('profilsekolah/prosesedit_misi'); ?>" method="POST" enctype="multipart/form-data">  
                                        <input type="hidden" name="id_misi" value="<?php echo $mi->row('id_misi'); ?>">  
                                        	<textarea name="txt_misi" class="ckeditor" rows="9"><?php echo $mi->row('txt_misi'); ?></textarea>
                                        	<hr/>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button class="btn btn-primary waves-effect waves-light m-b-5">Simpan</button>
                                                  <a href="<?php echo base_url('profilsekolah'); ?>"><button type="button" class="btn btn-default waves-effect m-b-5">Kembali</button></a>
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