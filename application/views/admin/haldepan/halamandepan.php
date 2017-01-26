			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                        	<div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Info Depan</h3>
                                    </div>
                                    <div class="panel-body" style="overflow-x:auto;">
                                        <?php
										foreach($idp as $infodepan){
										?>
										<?php echo $infodepan->infodp_txt; ?>
										<?php
										}
										?>
                                        <a href="<?php echo base_url().'halamandepan/edit_infodepan/'.$infodepan->id_infodp; ?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Ubah</button></a>
                                    </div>
                                </div>
                            </div>
                            
                        	<div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Link yang bersangkutan</h3> 
                                    </div> 
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Judul</th>
                                                            <th>Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
													foreach($h as $halamandepan){
													?>
                                                        <tr>
                                                            <td><?php echo $halamandepan->judul_sangkut1; ?></td>
                                                            <td><?php echo $halamandepan->link_sangkut1; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $halamandepan->judul_sangkut2; ?></td>
                                                            <td><?php echo $halamandepan->link_sangkut2; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $halamandepan->judul_sangkut3; ?></td>
                                                            <td><?php echo $halamandepan->link_sangkut3; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $halamandepan->judul_sangkut4; ?></td>
                                                            <td><?php echo $halamandepan->link_sangkut4; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $halamandepan->judul_sangkut5; ?></td>
                                                            <td><?php echo $halamandepan->link_sangkut5; ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <a href="<?php echo base_url().'halamandepan/edit_sangkut/'.$halamandepan->id_sangkut; ?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Ubah</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Hubungi Kami</h3> 
                                    </div> 
                                    <div class="panel-body" style="overflow-x:auto;"> 
                                    	<?php
										foreach($hu as $hubungi){
										?>
	                                        <p>
												<?php echo $hubungi->hubungi_text; ?>
												<br/>
												<a href="<?php echo $hubungi->link_email; ?>" target="_blank"><li class="fa fa-envelope"></li></a>
												&nbsp;
												<a href="<?php echo $hubungi->link_fb; ?>" target="_blank"><li class="fa fa-facebook"></li></a><br/>
											</p> 
										<?php
										}
										?>
                                        <a href="<?php echo base_url().'halamandepan/edit_hubungi/'.$hubungi->id_hubungi; ?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Ubah</button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Twitter Widget</h3> 
                                    </div> 
                                    <div class="panel-body" style="overflow-x:auto;"> 
                                        <p>
                                        <?php
										foreach($tw as $twitter){
										?>
                                        	<?php echo $twitter->kode_widget; ?>
                                        <?php
                                    	}
                                        ?>
                                        </p> 
                                   	 <a href="<?php echo base_url().'halamandepan/edit_twitter/'.$twitter->id_twitter; ?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Ubah</button></a>
                                    </div> 
                                </div>
                            </div>

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