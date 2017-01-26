			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic example -->
	                            <div class="col-md-6">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading"><h3 class="panel-title">Data Administrator</h3></div>
	                                    <div class="panel-body">	               
	                                    <form name="form1" role="form" action="<?php echo base_url('pengaturan/prosesedit'); ?>" method="POST" enctype="multipart/form-data">    
	                                    <input type="hidden" name="id_admin" value="<?php echo $p->row('id_admin'); ?>">           
	                                        	<div class="form-group">
		                                            <label for="exampleInputEmail1">Username</label>
		                                            <input name="username" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $p->row('username'); ?>">
	                                        	</div>
	                                        	<div class="form-group">
		                                            <label for="exampleInputEmail1">Nama Admin</label>
		                                            <input name="nama_admin" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $p->row('nama_admin'); ?>">
	                                        	</div>
	                                        	<div class="form-group">
		                                            <label for="exampleInputPassword1">Password</label>
		                                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan password baru.." required />
	                                       		</div>
                                               	<button class="btn btn-primary waves-effect waves-light m-b-5">Simpan</button>
                                               	<a href="<?php echo base_url('pengaturan'); ?>"><button type="button" class="btn btn-default waves-effect m-b-5">Kembali</button></a>
                                            </div>
	                                	</form>
	                                    </div><!-- panel-body -->
	                                </div> <!-- panel -->
	                            </div> <!-- col-->
                            </div>
                        </div>

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © SMAN 4 Cimahi.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->