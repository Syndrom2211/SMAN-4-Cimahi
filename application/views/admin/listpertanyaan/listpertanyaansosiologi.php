<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">List Pertanyaan Sosiologi</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="m-b-30">
                                            <button data-toggle="modal" data-target="#accordion-modal" class="btn btn-primary waves-effect waves-light">Tambah <i class="fa fa-plus"></i></button>
                                        </div>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('listpertanyaansosiologi/prosestambah_listpertanyaansosiologi'); ?>" method="POST" enctype="multipart/form-data">
                                        <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0">
                                                    <div class="panel-group panel-group-joined" id="accordion-test"> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                                                        Petunjuk Upload Gambar
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseOne" class="panel-collapse collapse in"> 
                                                                <div class="panel-body">
                                                                	<img src="<?php echo base_url().'css/images/petunjukuploadgambar.jpg'; ?>" width="400px"/>
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                                        Pertanyaan
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseTwo" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<textarea name="pertanyaan" class="ckeditor" rows="9"></textarea>
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
                                                                        Pilihan Ganda A
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseThree" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<textarea name="ganda_a" class="ckeditor" rows="9"></textarea>
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseFour" class="collapsed">
                                                                        Pilihan Ganda B
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseFour" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<textarea name="ganda_b" class="ckeditor" rows="9"></textarea>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseFive" class="collapsed">
                                                                        Pilihan Ganda C
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseFive" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<textarea name="ganda_c" class="ckeditor" rows="9"></textarea>
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseSix" class="collapsed">
                                                                        Pilihan Ganda D
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseSix" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<textarea name="ganda_d" class="ckeditor" rows="9"></textarea>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseSeven" class="collapsed">
                                                                        Pilihan Ganda E
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseSeven" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<textarea name="ganda_e" class="ckeditor" rows="9"></textarea>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseEight" class="collapsed">
                                                                        Jawaban
                                                                    </a> 
                                                                </h4> 
                                                            </div>
                                                            <div id="collapseEight" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div class="col-md-5">
                                                                        <select name="jawaban" class="chosen-select form-control">
                                                                            <option value="">--Pilih Jawaban--</option>
                                                                            <?php
                                                                            for($i = 'A'; $i <= 'E';$i++){
                                                                                echo "<option value'".$i."' selected>$i</option>";
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <button class="btn btn-primary waves-effect waves-light m-b-5" class="collapsed">Tambah</button>
                                                                </h4> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        </form>
                                        
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatabletanya" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Pertanyaan</th>
                                                            <th>A</th>
                                                            <th>B</th>
                                                            <th>C</th>
                                                            <th>D</th>
                                                            <th>E</th>
                                                            <th>Jawaban</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                             		
                                                    <tbody>
                                                    	<?php
                                                    	$i = 1;
                                                    	foreach($lpi as $listpertanyaansosiologi){
                                                    	?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $listpertanyaansosiologi->pertanyaan; ?></td>
                                                            <td><?php echo $listpertanyaansosiologi->ganda_a; ?></td>
                                                            <td><?php echo $listpertanyaansosiologi->ganda_b; ?></td>
                                                            <td><?php echo $listpertanyaansosiologi->ganda_c; ?></td>
                                                            <td><?php echo $listpertanyaansosiologi->ganda_d; ?></td>
                                                            <td><?php echo $listpertanyaansosiologi->ganda_e; ?></td>
                                                            <td><?php echo $listpertanyaansosiologi->jawaban; ?></td>
                                                            <td class="actions">
                                                                <a href="<?php echo base_url().'listpertanyaansosiologi/edit_listpertanyaansosiologi/'.$listpertanyaansosiologi->id_pertanyaan; ?>"><i class="fa fa-pencil"></i></a>
                                                                <a onclick="return confirm('Yakin mau hapus ?');" href="<?php echo base_url().'listpertanyaansosiologi/hapus_listpertanyaansosiologi/'.$listpertanyaansosiologi->id_pertanyaan; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    	}
                                                        ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © SMAN 4 Cimahi.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->