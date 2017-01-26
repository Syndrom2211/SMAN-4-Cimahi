    	<script>
            var resizefunc = [];
        </script>
        <script src="<?php echo base_url('js/jquery.min.js');?>"></script>

        <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('js/waves.js');?>"></script>
        <script src="<?php echo base_url('js/wow.min.js');?>"></script>
        <script src="<?php echo base_url('js/jquery.nicescroll.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery.scrollTo.min.js');?>"></script>
        <script src="<?php echo base_url('css/assets/chat/moment-2.2.1.js');?>"></script>
        <script src="<?php echo base_url('css/assets/jquery-sparkline/jquery.sparkline.min.js');?>"></script>
        <script src="<?php echo base_url('css/assets/jquery-detectmobile/detect.js');?>"></script>
        <script src="<?php echo base_url('css/assets/fastclick/fastclick.js');?>"></script>
        <script src="<?php echo base_url('css/assets/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
        <script src="<?php echo base_url('css/assets/jquery-blockui/jquery.blockUI.js');?>"></script>

        <!-- sweet alerts -->
        <script src="<?php echo base_url('css/assets/sweet-alert/sweet-alert.min.js');?>"></script>
        <script src="<?php echo base_url('css/assets/sweet-alert/sweet-alert.init.js');?>"></script>

        <!-- flot Chart -->
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.js');?>"></script>
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.time.js');?>"></script>
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.tooltip.min.js');?>"></script>
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.resize.js');?>"></script>
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.pie.js');?>"></script>
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.selection.js');?>"></script>
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.stack.js');?>"></script>
        <script src="<?php echo base_url('css/assets/flot-chart/jquery.flot.crosshair.js');?>"></script>

        <!-- CKEditor -->
        <script src="<?php echo base_url('css/editor/ckeditor/ckeditor.js');?>"></script>

        <!-- Counter-up -->
        <script src="<?php echo base_url('css/assets/counterup/waypoints.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('css/assets/counterup/jquery.counterup.min.js');?>" type="text/javascript"></script>

        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('js/jquery.app.js');?>"></script>
		
		<script type="text/javascript" src="<?php echo base_url('css/assets/gallery/isotope.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('css/assets/magnific-popup/magnific-popup.js');?>"></script> 

        <!-- Dashboard -->
        <script src="<?php echo base_url('js/jquery.dashboard.js');?>"></script>

        <!-- Chat -->
        <script src="<?php echo base_url('js/jquery.chat.js');?>"></script>

        <!-- Todo -->
        <script src="<?php echo base_url('js/jquery.todo.js');?>"></script>

        <!-- Modal-Effect -->
        <script src="<?php echo base_url('css/assets/modal-effect/js/classie.js');?>"></script>
        <script src="<?php echo base_url('css/assets/modal-effect/js/modalEffects.js');?>"></script>

        <!-- Examples -->
	    <script src="<?php echo base_url('css/assets/magnific-popup/magnific-popup.js');?>"></script>
	    <script src="<?php echo base_url('css/assets/jquery-datatables-editable/jquery.dataTables.js');?>"></script> 
	    <script src="<?php echo base_url('css/assets/datatables/dataTables.bootstrap.js');?>"></script>
	    <script src="<?php echo base_url('css/assets/jquery-datatables-editable/datatables.editable.init.js');?>"></script>
        <script src="<?php echo base_url('css/assets/timepicker/bootstrap-datepicker.js');?>"></script>
	    <script type="text/javascript" src="<?php echo base_url('css/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('css/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>"></script>

        <!-- Button -->
        <script src="<?php echo base_url('css/assets/datatables/dataTables.buttons.min.js');?>"></script> 
        <script src="<?php echo base_url('css/assets/datatables/buttons.print.min.js');?>"></script> 

        <!--form validation init-->
        <script src="<?php echo base_url('css/assets/summernote/summernote.min.js');?>"></script>

	    <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatabletanya').dataTable();
            } );
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
			    $('#datatable').dataTable( {
			        dom: 'Bfrtip',
			        buttons: [
			            'print'
			        ]
			    } );
			} );
        </script>

        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

            });
            jQuery(document).ready(function() {

                // Date Picker
                jQuery('#datepicker').datepicker();

            });
        </script>

	</body>
</html>