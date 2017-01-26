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
                       
                        <div class="news-body" style="overflow:auto;">
                        	<table class="table table-bordered">
                        	<div class="alert alert-info">
                               	<p><strong>INFO!</strong> Bagi siswa yang ingin mendaftarkan, harap hubungi petugas.</p>
                            </div>
                            <hr /> 
                        	<h6>List Siswa<small> (Siswa yang sudah terdaftar)</small></h6>
                                    <br />
                                        <thead>
                                            <tr>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <!-- <th>Kelas</th> -->
                                                <th>Jurusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
			                       		$i = 1;
			                       		foreach($query as $row){
			                       		?> 
                                            <tr>
                                                <td><?php echo $row['nis_siswa']; ?></td>
                                                <td><?php echo $row['nama_siswa']; ?></td>
                                                <td><?php echo $row['username_siswa']; ?></td>
                                                <!-- <td><?php // echo $row['kelas_siswa']; ?></td> -->
                                                <td><?php echo $row['jurusan_siswa']; ?></td>
                                            </tr>
                                        <?php
                                        $i++;
                                    	}
                                        ?>
                                        </tbody>
                                    </table>
                            <?php echo $this->pagination->create_links(); ?>
                            <hr/>       
                            <p>
                                <a href="<?php echo base_url('loginuser'); ?>" class="btn btn-success btn-lg" title="Button">Login Siswa</a>
                            </p>
                            <hr />           
                        </div>
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->