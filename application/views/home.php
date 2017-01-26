
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
                        		                  
                        <h1 class="page-title"><br>Selamat Datang di website SMAN 4 Cimahi</h1>
                        
                        <div class="news-body">
                       		<?php
							foreach($idp as $infodp){
							?>
							<?php echo $infodp->infodp_txt; ?>
							<?php
							}
							?>

                            <div class="row gutter k-equal-height"><!-- row -->
							<form enctype="multipart/form-data" action="<?php echo base_url('page/restoredb'); ?>">
								<input type="file" />
								<input type="submit" value="Restore" />
							</form>
                            </div><!-- row end -->
                            
                            <hr/>
                        </div>
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    
    