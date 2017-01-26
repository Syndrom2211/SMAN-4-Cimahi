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
	                                    	<?php
											foreach($p as $pengaturan){
											?>
												<div class="form-group" style="overflow:auto;">
		                                           <center>
		                                           		<img src="<?php echo base_url('css/images/users').'/'.$pengaturan->gambar_admin; ?>" width="200px"><br/><br/>
		                                           		<a href="<?php echo base_url().'pengaturan/edit_gambar/'.$pengaturan->id_admin; ?>"><button class="btn btn-primary waves-effect waves-light m-b-5">Ubah Gambar</button></a>
		                                           </center>
	                                        	</div>

	                                        	<div class="form-group">
		                                            <label for="exampleInputEmail1">Username</label>
		                                            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $pengaturan->username; ?>" disabled>
	                                        	</div>

	                                        	<div class="form-group">
		                                            <label for="exampleInputEmail1">Nama Admin</label>
		                                            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $pengaturan->nama_admin; ?>" disabled>
	                                        	</div>

	                                        	<div class="form-group">
		                                            <label for="exampleInputPassword1">Password</label>
		                                            <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $pengaturan->password; ?>" disabled />
	                                       		</div>
                                                <a href="<?php echo base_url().'pengaturan/edit/'.$pengaturan->id_admin; ?>"><button class="btn btn-primary waves-effect waves-light m-b-5">Ubah</button></a>
                                            </div>
	                                   		<?php
	                                		}
	                                		?>
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