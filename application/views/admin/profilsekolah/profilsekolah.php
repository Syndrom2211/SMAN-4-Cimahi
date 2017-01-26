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
                                        <h3 class="panel-title">VISI</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                    	<?php
										foreach($vi as $visi){
										?>
                                        <p style="text-align:justify;"><?php echo $visi->txt_visi; ?></p> 
                                        <?php
                                    	}
                                    	?>
                                        <a href="<?php echo base_url().'profilsekolah/edit_visi/'.$visi->id_visi; ?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Ubah</button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">MISI</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                    	<?php
										foreach($mi as $misi){
										?>
                                        <p style="text-align:justify;"><?php echo $misi->txt_misi; ?></p> 
                                        <?php
                                    	}
                                        ?>
                                   	 <a href="<?php echo base_url().'profilsekolah/edit_misi/'.$misi->id_misi; ?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Ubah</button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Struktur Organisasi</h3>
                                    </div>
                                    <div class="panel-body" style="overflow:auto;">
                                    	<?php
										foreach($so as $strukturorg){
										?>
                                        	<center><img src="<?php echo base_url('css/images').'/'.$strukturorg->isi_strukturorg; ?>" width="800px" /></center>   
                                        <br/>
                                        <?php
                                    	}
                                        ?>
                                        	<center><a href="<?php echo base_url().'profilsekolah/edit_strukturorg/'.$strukturorg->id_strukturorg; ?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-5" style="margin-top:10px;">Ubah</button></a></center>
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