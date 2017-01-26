<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMAN 4 Cimahi</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url('css/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url('js/dropdown-menu/dropdown-menu.css');?>" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url('js/fancybox/jquery.fancybox.css');?>" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url('js/audioplayer/audioplayer.css');?>" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet" type="text/css"><!-- theme styles -->

    <link rel="shortcut icon" href="<?php echo base_url('css/img/logoskul.jpg');?>" />

  </head>
  
  <body role="document" class="page">
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
    	<div class="row"><!-- row -->
        
        	<div class="col-lg-12">
        
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
                
                    <h1 class="k-logo">
                        <a href="<?php echo base_url();?>" title="Home Page">
                            <img src="<?php echo base_url('css/img/home/logoskul.jpg');?>" alt="Site Logo" class="img-responsive" />
                        </a>
                    </h1>
                    
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            
            	</div><!-- site logo end -->

            	<nav id="k-menu" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>" title="Halaman Depan">Home</a>
                        </li>
                        <li>
                            <a href="#" class="Pages Collection" title="Tentang Sekolah Kami">Profil Sekolah</a>
                            <ul class="sub-menu">
                                <li><?php echo anchor('page/visimisi', 'Visi dan Misi');?></li>
                                <li><?php echo anchor('page/strukturorganisasi', 'Struktur Organisasi');?></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/test'); ?>" title="Pertanyaan pilihan ganda">Test Online</a>
                        </li>
                    </ul>
        
            	</nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    
    </div><!-- container + head wrapper end -->