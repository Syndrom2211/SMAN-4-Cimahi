<div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->
                
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <!-- KOSONG -->
                        </div>
                    </form>
                    
                
                </div><!-- top search end -->
            
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><!-- KOSONG --></li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter fullwidth"><!-- row -->

                <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
                	
                    <div class="col-padded" style="box-shadow: 0 0 15px 1px #c6c6c6;"><!-- inner custom column -->
                        		                  
                        <h1 class="page-title"><br>Test Online</h1>
                        
                        <div class="news-body">
                        	<table class="table table-bordered">
                        	
                        	<h6>List Mata Kuliah Jurusan : <?php echo $this->session->userdata("jurusan_siswa"); ?></small></h6>
                                    <br />
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Test</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<!-- BAGIAN IPA -->
                                        	<?php
                                        	if($this->session->userdata("jurusan_siswa")=='IPA'){
                                        	?>
                                            <tr>
                                                <td>1</td>
                                                <td>Bahasa Indonesia</td>
                                                <td><a href="<?php echo base_url('page/masuktest_indo'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Bahasa Inggris</td>
                                                <td><a href="<?php echo base_url('page/masuktest_inggris'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Matematika</td>
                                                <td><a href="<?php echo base_url('page/masuktest_mtk'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Biologi</td>
                                                <td><a href="<?php echo base_url('page/masuktest_biologi'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Fisika</td>
                                                <td><a href="<?php echo base_url('page/masuktest_fisika'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Kimia</td>
                                                <td><a href="<?php echo base_url('page/masuktest_kimia'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <?php
                                        	}else{
                                            ?>
                                            <!-- BAGIAN IPS -->
                                            <tr>
                                                <td>7</td>
                                                <td>Sosiologi</td>
                                                <td><a href="<?php echo base_url('page/masuktest_sosiologi'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Geografi</td>
                                                <td><a href="<?php echo base_url('page/masuktest_geografi'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Ekonomi</td>
                                                <td><a href="<?php echo base_url('page/masuktest_ekonomi'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Sejarah</td>
                                                <td><a href="<?php echo base_url('page/masuktest_sejarah'); ?>" class="btn btn-success btn-md" title="Button">Masuk Test</a></td>
                                            </tr>
                                            <?php
                                        	}
                                            ?>
                                        </tbody>
                                    </table>
                            <hr />
                            <a href="<?php echo base_url('page/logout'); ?>" class="btn btn-danger btn-lg" title="Button">Keluar</a>           
                        </div>
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->