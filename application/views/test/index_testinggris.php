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
                        		                  
                        <h1 class="page-title"><br>Test Online B.Inggris</h1>
                        
                        <div class="news-body">
                        	<!--
                        	<div class="alert alert-info">
                               	<p>Selamat Berjuang !!!</p>
                            </div>
                            <hr /> 
                            -->
                            <?php
                            foreach($waktupanggil as $waktu){
                            ?>
                            <script type="text/javascript">
                            	ini = "<?php echo $waktu['waktu']; ?>";
                            </script>
                            <?php
                            }	
                            ?>
                            <script type="text/javascript">
                            	var ke_detik = ini*60;
								var total_seconds = ke_detik;
								var c_minutes = parseInt(total_seconds/60);
								var c_seconds = parseInt(total_seconds%60);
								function CheckTime(){
									document.getElementById("quiz-time-left").innerHTML	= '<div class="news-tags tagcloud"><a rel="tag" href="#">Waktu ' + c_minutes + ':' + c_seconds + '</a></div>';
									if(total_seconds <= 0){
										setTimeout('document.siform.submit()',1);
									}else{
										total_seconds = total_seconds -1;
										c_minutes = parseInt(total_seconds/60);
										c_seconds = parseInt(total_seconds%60);
										setTimeout("CheckTime()",1000);
									}
								}
								setTimeout("CheckTime()",1000);
							</script>

                            <?php
                            if($pertanyaan_selanjutnya<=$maxdata+1){
                            ?>
	                            <?php //we'll use the codeigniter form helper to generate manually the form
	                            $atribut = array('id' => 'siform');
								echo form_open('page/testinggris_mulai/'.$pertanyaan_selanjutnya, $atribut); ?>
	                                    <?php
	                                    foreach($loo as $pertanyaan){
	                                    ?>
	                                    <table class="table">
	                                    	<tr>
	                                    		<td><div style="font-weight: bold" id="quiz-time-left"></div></td>
	                                    	</tr>
	                                    	<tr>
										    	<td>
										    		<?php 
										    			$no = 1;
										    			echo $pertanyaan_selanjutnya-$no.".".$pertanyaan['pertanyaan']; 
										    		?>
										    	</td>
										    </tr>
                                            <tr>
                                                <td><input type="hidden" name="jawabasli" value="<?php echo $pertanyaan['jawaban']; ?>" /></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="jawab" value="A" required />(A) <?php echo $pertanyaan['ganda_a']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="jawab" value="B" required />(B) <?php echo $pertanyaan['ganda_b']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="jawab" value="C" required />(C) <?php echo $pertanyaan['ganda_c']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="jawab" value="D" required />(D) <?php echo $pertanyaan['ganda_d']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="jawab" value="E" required />(E) <?php echo $pertanyaan['ganda_e']; ?></td>
                                            </tr>
										<?php
										}
										?>
											<tr>
												<td><hr/></td>
											</tr>
											<tr>
										    	<td>
										    		<button type="submit" class="btn btn-success btn-lg" title="Jawab Pertanyaan">Jawab</button>
										    		&nbsp;
										    		<a href="<?php echo base_url('page/logout'); ?>" class="btn btn-danger btn-lg" title="Keluar dari Test">Keluar</a>
										    	</td>
										    </tr>
	                                    </table>
								<?=form_close();?>
							<?php
							}else{
							?>
									<div class="bullet-paragraph-wrap"><!-- bullet paragraph -->
                                        <i class="fa fa-2x fa-stack-overflow"></i>
                                        <div class="bullet-paragraph-text">
                                            <h6>DATA SISWA :</h6>
                                            <p>
                                            	<a onclick="window.print()" href="#">
												<img src="<?php echo base_url('css/img/home/Icons-mini-action_print.gif');?>" border="0" alt="" width="16" height="16" />
													Print Data
												</a>
                                            </p>
                                            <p>
                                            <?php
                                            if($this->session->userdata("jurusan_siswa")=='IPA'){
                                            ?>
                                            <form class="form-horizontal" role="form" action="<?php echo base_url('page/sessionbaru_inggris1'); ?>" method="POST" enctype="multipart/form-data">  
                                            <?php
                                        	}else{
                                        	?>
                                            <form class="form-horizontal" role="form" action="<?php echo base_url('page/sessionbaru_inggris2'); ?>" method="POST" enctype="multipart/form-data">  
                                            <?php
                                        	}
                                        	?>
                                            	<table class="table table-hover">
			                                        <tbody>
			                                            <tr>
			                                                <td>NIS</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php echo $this->session->userdata("nis_siswa"); ?>
			                                                	<input name="nis_siswa" type="hidden" value="<?php echo $this->session->userdata("nis_siswa"); ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                                <td>Jurusan</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php echo $this->session->userdata("jurusan_siswa"); ?>
			                                                	<input name="jurusan_siswa" type="hidden" value="<?php echo $this->session->userdata("jurusan_siswa"); ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                                <td>Kelas</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php echo $this->session->userdata("kelas_siswa"); ?>
			                                                	<input name="kelas_siswa" type="hidden" value="<?php echo $this->session->userdata("kelas_siswa"); ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                                <td>Tanggal</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php echo $tanggal; ?>
			                                                	<input name="tanggal" type="hidden" value="<?php echo $tanggal; ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                                <td>Jam</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php echo $jam; ?>
			                                                	<input name="jam" type="hidden" value="<?php echo $jam; ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                                <td>Jumlah Soal</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php echo $maxdata; ?>
			                                                	<input name="maxdata" type="hidden" value="<?php echo $maxdata; ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                            	<td>Benar</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php echo "<font color='lime'>".$benar."</font>"; ?>
			                                                	<input name="benar" type="hidden" value="<?php echo $benar; ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                            	<td>Salah</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<?php $salahnya = $salah + 1; echo "<font color='red'>".$salahnya."</font>"; ?>
			                                                	<input name="salahnya" type="hidden" value="<?php echo $salahnya; ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                                <td>Score</td>
			                                                <td>:</td>
			                                                <td>
			                                                	<b><?php echo "<font color='green'>".$score."</font>"; ?></b>
			                                                	<input name="score" type="hidden" value="<?php echo $score; ?>" />
			                                                </td>
			                                            </tr>
			                                            <tr>
			                                            	<td>
			                                            		<button class="btn btn-info btn-lg" title="Button">Submit Data</button>
			                                            	</td>
			                                            	<td></td>
			                                            	<td></td>
			                                            </tr>
			                                        </tbody>
			                                    </table>
			                                </form>
                                            </p>
                                        </div>
                                    </div><!-- bullet paragraph end -->
	                            </table>
                            <hr /> 
                            <?php
							}
							?>              
                        </div>
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->