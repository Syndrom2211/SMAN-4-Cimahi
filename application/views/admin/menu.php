<body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo base_url('admin'); ?>" class="logo"> <span>Administrator </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            	<img src="<?php echo base_url('css/images/users').'/'.$this->session->userdata('gambar_admin'); ?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('nama_admin'); ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo anchor('loginadmin/logout', '<i class="md md-settings-power"></i> Logout', array('onclick' => "return confirm('Anda yakin akan logout ?')"));?></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Petugas</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url('admin'); ?>" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('listadmin'); ?>" class="waves-effect"><i class="md md-person"></i><span> List Admin </span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('listsiswa'); ?>" class="waves-effect"><i class="md md-person"></i><span> List Siswa </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-school"></i><span> Test Online </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                	<li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>B.Indonesia</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><?php echo anchor('listpertanyaanindo', 'List Pertanyaan');?></li>
                                            <li><?php echo anchor('historyindo_depan', 'History Pertanyaan');?></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>B.Inggris</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><?php echo anchor('listpertanyaaninggris', 'List Pertanyaan');?></li>
                                            <li><?php echo anchor('historyinggris_depan', 'History Pertanyaan');?></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Matematika</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><?php echo anchor('listpertanyaanmtk', 'List Pertanyaan');?></li>
                                            <li><?php echo anchor('historymtk_depan', 'History Pertanyaan');?></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
		                                <a href="javascript:void(0);" class="waves-effect"><span>IPA</span><span class="pull-right"><i class="md md-add"></i></span></a>
		                                <ul>
		                                    <li class="has_sub">
		                                        <a href="javascript:void(0);" class="waves-effect"><span>Biologi</span> <span class="pull-right"><i class="md md-add"></i></span></a>
		                                        <ul style="">
		                                            <li><?php echo anchor('listpertanyaanbiologi', 'List Pertanyaan');?></li>
		                                            <li><?php echo anchor('historybiologi_depan', 'History Pertanyaan');?></li>
		                                        </ul>
		                                    </li>
		                                    <li class="has_sub">
		                                        <a href="javascript:void(0);" class="waves-effect"><span>Fisika</span> <span class="pull-right"><i class="md md-add"></i></span></a>
		                                        <ul style="">
		                                            <li><?php echo anchor('listpertanyaanfisika', 'List Pertanyaan');?></li>
		                                            <li><?php echo anchor('historyfisika_depan', 'History Pertanyaan');?></li>
		                                        </ul>
		                                    </li>
		                                    <li class="has_sub">
		                                        <a href="javascript:void(0);" class="waves-effect"><span>Kimia</span> <span class="pull-right"><i class="md md-add"></i></span></a>
		                                        <ul style="">
		                                            <li><?php echo anchor('listpertanyaankimia', 'List Pertanyaan');?></li>
		                                            <li><?php echo anchor('historykimia_depan', 'History Pertanyaan');?></li>
		                                        </ul>
		                                    </li>
		                                </ul>
		                            </li> 
		                            <li class="has_sub">
		                                <a href="javascript:void(0);" class="waves-effect"><span>IPS</span><span class="pull-right"><i class="md md-add"></i></span></a>
		                                <ul>
		                                    <li class="has_sub">
		                                        <a href="javascript:void(0);" class="waves-effect"><span>Sosiologi</span> <span class="pull-right"><i class="md md-add"></i></span></a>
		                                        <ul style="">
		                                            <li><?php echo anchor('listpertanyaansosiologi', 'List Pertanyaan');?></li>
		                                            <li><?php echo anchor('historysosiologi_depan', 'History Pertanyaan');?></li>
		                                        </ul>
		                                    </li>
		                                    <li class="has_sub">
		                                        <a href="javascript:void(0);" class="waves-effect"><span>Geografi</span> <span class="pull-right"><i class="md md-add"></i></span></a>
		                                        <ul style="">
		                                            <li><?php echo anchor('listpertanyaangeografi', 'List Pertanyaan');?></li>
		                                            <li><?php echo anchor('historygeografi_depan', 'History Pertanyaan');?></li>
		                                        </ul>
		                                    </li>
		                                    <li class="has_sub">
		                                        <a href="javascript:void(0);" class="waves-effect"><span>Ekonomi</span> <span class="pull-right"><i class="md md-add"></i></span></a>
		                                        <ul style="">
		                                            <li><?php echo anchor('listpertanyaanekonomi', 'List Pertanyaan');?></li>
		                                            <li><?php echo anchor('historyekonomi_depan', 'History Pertanyaan');?></li>
		                                        </ul>
		                                    </li>
		                                    <li class="has_sub">
		                                        <a href="javascript:void(0);" class="waves-effect"><span>Sejarah</span> <span class="pull-right"><i class="md md-add"></i></span></a>
		                                        <ul style="">
		                                            <li><?php echo anchor('listpertanyaansejarah', 'List Pertanyaan');?></li>
		                                            <li><?php echo anchor('historysejarah_depan', 'History Pertanyaan');?></li>
		                                        </ul>
		                                    </li>
		                                </ul>
		                            </li>                           
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url('jadwalkelas'); ?>" class="waves-effect"><i class="md md-store-mall-directory"></i><span> Jadwal Kelas </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-store-mall-directory"></i><span> Pengaturan </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                	<li><?php echo anchor('halamandepan', 'Halaman Depan');?></li>
                                    <li><?php echo anchor('profilsekolah', 'Profil Sekolah');?></li>
                                    <li><?php echo anchor('waktutest', 'Waktu Test');?></li>
                                    <li><?php echo anchor('score', 'Score');?></li>
                                </ul>
                            </li>                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 