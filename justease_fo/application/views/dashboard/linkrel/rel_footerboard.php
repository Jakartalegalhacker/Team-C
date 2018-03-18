<!-- jQuery 2.1.4 -->
<script src="<?php echo PLUGINS; ?>/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
<script src="<?php echo DIST_JS; ?>/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo BOOTSTRAP_JS; ?>/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
<script src="<?php echo DIST_JS; ?>/raphael-min.js"></script>
<script src="<?php echo PLUGINS; ?>/morris/morris.min.js"></script>
<!-- DataTables -->
<script src="<?php echo PLUGINS; ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo PLUGINS; ?>/datatables/dataTables.bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo PLUGINS; ?>/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo PLUGINS; ?>/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo PLUGINS; ?>/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo PLUGINS; ?>/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>-->
<script src="<?php echo DIST_JS; ?>/moment-min.js"></script>
<script src="<?php echo PLUGINS; ?>/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo PLUGINS; ?>/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo PLUGINS; ?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo PLUGINS; ?>/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo PLUGINS; ?>/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo DIST_JS; ?>/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?php echo DIST_JS; ?>/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="<?php echo DIST_JS; ?>/demo.js"></script>-->
<!-- chart min js -->
<script src="<?php echo PLUGINS; ?>/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?php echo DIST_JS; ?>/pages/dashboard2.js"></script>-->
<!-- define all data --> 
<!-- Select2 -->
<script src="<?php echo PLUGINS; ?>/select2/select2.full.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
    });
</script>
