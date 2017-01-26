		<div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Login <strong>Siswa</strong> </h3>
                </div> 


                <div class="panel-body">
                <?php
					$attributes = array('name' => 'login_form', 'id' => 'login_form', 'class' => 'form-horizontal m-t-20');
					echo form_open('loginuser/aksi', $attributes); 
				?>

					<div class="form-group m-t-30">
                        <div class="alert alert-info">
                            Jika lupa password harap menghubungi petugas web.
                        </div>
                    </div>
                    
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="nis_siswa" type="text" required="" placeholder="Masukan NIS">
                        </div>
                    </div>
                    <!--
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="username_siswa" type="text" required="" placeholder="Masukan Username">
                        </div>
                    </div>
					-->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="password_siswa" type="password" required="" placeholder="Masukan Password">
                        </div>
                    </div>
                    
                    <!--
                    <div class="form-group">
                        <div class="col-xs-12">
		                    <select style="width:100%" name="jurusan_siswa">
		                    		<option value="Jurusan...">Jurusan...</option>
		                            <option value="IPA">IPA</option>
		                            <option value="IPS">IPS</option>
		                    </select>
		                </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
		                    <select style="width:100%" name="kelas_siswa">
		                    		<option value="Kelas...">Kelas...</option>
		                            <option value="1">1</option>
		                            <option value="2">2</option>
		                            <option value="3">3</option>
		                    </select>
		                </div>
                    </div>					
					-->
					
                   		<!-- PESAN START -->
						<?php if(!empty($pesan)){ ?>
								<div class="alert alert-danger">
									<i class="fa fa-lg  fa-times-circle"></i> <?php echo $pesan; ?>
								</div>
						<?php } ?>
						<!-- PESAN END -->

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                        
                </form> 
                </div>                                 
                
            </div>
        </div>