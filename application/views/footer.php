<div id="k-footer"><!-- footer -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row no-gutter"><!-- row -->
            
            	<div class="col-lg-4 col-md-4"><!-- widgets column left -->
            
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Link yang bersangkutan</h1>
                                <?php
								foreach($h as $haldepan){
								?>
                                <ul>
                                	<li><a target="_blank" href="<?php echo $haldepan->link_sangkut1; ?>" title="menu item"><?php echo $haldepan->judul_sangkut1; ?></a></li>
                                    <li><a target="_blank" href="<?php echo $haldepan->link_sangkut2; ?>" title="menu item"><?php echo $haldepan->judul_sangkut2; ?></a></li>
                                    <li><a target="_blank" href="<?php echo $haldepan->link_sangkut3; ?>" title="menu item"><?php echo $haldepan->judul_sangkut3; ?></a></li>
                                    <li><a target="_blank" href="<?php echo $haldepan->link_sangkut4; ?>" title="menu item"><?php echo $haldepan->judul_sangkut4; ?></a></li>
                                    <li><a target="_blank" href="<?php echo $haldepan->link_sangkut5; ?>" title="menu item"><?php echo $haldepan->judul_sangkut5; ?></a></li>
                                </ul>
                    			<?php
                    			}
                    			?>
							</li>
                            
                        </ul><!-- widgets end -->
                         
                    </div>
                    
                </div><!-- widgets column left end -->
                
                <div class="col-lg-4 col-md-4"><!-- widgets column center -->
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Hubungi Kami</h1>
                                
                                <div itemscope itemtype="http://data-vocabulary.org/Organization"> 
                                <?php
								foreach($hu as $hubungi){
								?>                                
                                	<div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                		<?php echo $hubungi->hubungi_text; ?>
                                	</div>                                    
                                </div>
                                
                                <div class="social-icons">
                                
                                	<ul class="list-unstyled list-inline">
                                    
                                    	<li><a target="_blank" href="<?php echo "mailto:".$hubungi->link_email; ?>" title="Contact us"><i class="fa fa-envelope"></i></a></li>
                                        <li><a target="_blank" href="<?php echo $hubungi->link_fb; ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    
                                    </ul>
                                
                                </div>
                    			<?php
                    			}
                    			?>
							</li>
                            
                        </ul>
                        
                    </div>
                    
                </div><!-- widgets column center end -->
                
                <div class="col-lg-4 col-md-4"><!-- widgets column right -->
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_sofa_flickr"><!-- widgets list -->
                    
                                <h1 style="margin:0px 0px 20px;" class="title-widget">Twitter Widget</h1>
                                <?php
								foreach($tw as $twitter){
								?>
                                <!-- TWITTER WIDGET -->
                                <?php echo $twitter->kode_widget; ?>
                                <?php
                            	}
                                ?>
							</li>
                            
                        </ul> 
                        
                    </div>
                
                </div><!-- widgets column right end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- footer end -->
    
    <div id="k-subfooter"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="col-lg-12">
                
                	<p class="copy-text text-inverse">
                    &copy; 2015 SMAN 4 Cimahi. All rights reserved.
                    </p>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->

    <!-- jQuery -->
    <script src="<?php echo base_url('js/jQuery/jquery-2.1.1.min.js');?>"></script>
    <script src="<?php echo base_url('js/jQuery/jquery-migrate-1.2.1.min.js');?>"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo base_url('css/bootstrap/js/bootstrap.min.js');?>"></script>
    
    <!-- Drop-down -->
    <script src="<?php echo base_url('js/dropdown-menu/dropdown-menu.js');?>"></script>
    
    <!-- Fancybox -->
	<script src="<?php echo base_url('js/fancybox/jquery.fancybox.pack.js');?>"></script>
    <script src="<?php echo base_url('js/fancybox/jquery.fancybox-media.js');?>"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    <script src="<?php echo base_url('js/jquery.fitvids.js');?>"></script>
    
    <!-- Audio player -->
	<script src="<?php echo base_url('js/audioplayer/audioplayer.min.js');?>"></script>
    
    <!-- Pie charts -->
    <script src="<?php echo base_url('js/jquery.easy-pie-chart.js');?>"></script>
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
    <!-- Theme -->
    <script src="<?php echo base_url('js/theme.js');?>"></script>
    
  </body>
</html>