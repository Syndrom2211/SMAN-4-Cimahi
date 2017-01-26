<body>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white">&nbsp;</h3>
                </div> 

                <div class="panel-body" style="padding-top:0px;">
                <?php
					$attributes = array('name' => 'login_form', 'id' => 'login_form');
					echo form_open('loginadmin/aksi', $attributes); 
				?>

                    <div class="form-group">
                        <h3>Halaman Login Admin</h3> 
                        <p class="text-muted">Masukan username dan password.</p> 
                        <div class="input-group m-t-30"> 
                        	<table>
                        	<tr>
                        		<td><input type="text" class="form-control input-lg" placeholder="Username" name="username"></td>
                        		<td><input type="password" class="form-control input-lg" placeholder="Password" name="password"></td> 
                        	</tr>
                            <tr>
                            	<td></td> 
                           	</tr>
                           	</table> 
                           	<span class="input-group-btn"> <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">Log In</button> </span>
                        </div> 
                        <br/>
                        <!-- PESAN START -->
						<?php if(!empty($pesan)){ ?>
								<div class="alert alert-danger">
									<i class="fa fa-lg  fa-times-circle"></i> <?php echo $pesan; ?>
								</div>
						<?php } ?>
						<!-- PESAN END -->
                    </div> 
                </form>         

                </div>                                 
                
            </div>
        </div>