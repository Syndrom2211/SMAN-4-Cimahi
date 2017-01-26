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
                        		                  
                        <h1 class="page-title"><br>Test Online Sejarah</h1>
                        
                        <div class="news-body">
                        	<h6>Ketentuan <small> (Ketentuan mengerjakan soal)</small></h6>
                            <br />
                            <div class="alert alert-info">
                               	<p><strong>Ketentuan :</strong>
                               		<br/> 1. Jumlah soal test online <b><?php echo $maxdata; ?></b> Soal 
                               		<br/> 2. Soal Pilihan Ganda Semua
                               		<?php
                               		foreach($waktupanggil as $waktu){
                               		?>
                               		<br/> 3. Waktu per 1 soal berdurasi <b><?php echo $waktu['waktu']; ?> Menit</b>
                               		<?php
                               		}
                               		?>
                               		<br/> 4. Tidak boleh curang
                               	</p>
                            </div>
                            <hr />
                            <a href="<?php echo base_url('page/testsejarah_mulai'); ?>" class="btn btn-success btn-lg" title="Button">Mulai Test</a>    
                            <a href="<?php echo base_url('page/logout'); ?>" class="btn btn-danger btn-lg" title="Keluar dari Test">Keluar</a>       
                        </div>
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->