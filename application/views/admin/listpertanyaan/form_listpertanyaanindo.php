			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                        <!-- Horizontal form -->
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Edit List Pertanyaan B.Indonesia</h3></div>
                                    <div class="panel-body">
                                    	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Petunjuk Upload Gambar</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><img src="<?php echo base_url().'css/images/petunjukuploadgambar.jpg'; ?>" width="400px"/></p>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Petunjuk Upload Gambar</button>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('listpertanyaanindo/prosesedit_listpertanyaanindo'); ?>" method="POST" enctype="multipart/form-data">  
                                        <input type="hidden" name="id_pertanyaan" value="<?php echo $lpin->row('id_pertanyaan'); ?>">  
                                        	<hr/>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Pertanyaan </label>
                                                <div class="col-sm-9">
                                                  <textarea name="pertanyaan" class="ckeditor" rows="9"><?php echo $lpin->row('pertanyaan'); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Pilihan A </label>
                                                <div class="col-sm-9">
                                                  <textarea name="ganda_a" class="ckeditor" rows="9"><?php echo $lpin->row('ganda_a'); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Pilihan B </label>
                                                <div class="col-sm-9">
                                                  <textarea name="ganda_b" class="ckeditor" rows="9"><?php echo $lpin->row('ganda_b'); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Pilihan C </label>
                                                <div class="col-sm-9">
                                                  <textarea name="ganda_c" class="ckeditor" rows="9"><?php echo $lpin->row('ganda_c'); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Pilihan D </label>
                                                <div class="col-sm-9">
                                                  <textarea name="ganda_d" class="ckeditor" rows="9"><?php echo $lpin->row('ganda_d'); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Pilihan E </label>
                                                <div class="col-sm-9">
                                                  <textarea name="ganda_e" class="ckeditor" rows="9"><?php echo $lpin->row('ganda_e'); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Jawaban </label>
                                                <div class="col-sm-9">
                                                  <textarea name="jawaban" class="ckeditor" rows="9"><?php echo $lpin->row('jawaban'); ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Jawaban </label>
                                                <div class="col-md-5">
                                                    <select name="jawaban" class="chosen-select form-control">
                                                        <option value="">--Pilih Jawaban--</option>
                                                        <?php
                                                        for($i = 'A'; $i <= 'E';$i++){
                                                            if($lpin->row('jawaban') == $i){
                                                                echo "<option value'".$i."' selected>$i</option>";
                                                            }else{
                                                                echo "<option value'".$i."'>$i</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>


                                            <hr/>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button class="btn btn-primary waves-effect waves-light m-b-5">Simpan</button>
                                                  <a href="<?php echo base_url('listpertanyaanindo'); ?>"><button type="button" class="btn btn-default waves-effect m-b-5">Kembali</button></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                    </div> <!-- container -->
                               
                </div> <!-- content -->
            </div>
                <footer class="footer text-right">
                    2015 © SMAN 4 Cimahi.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->