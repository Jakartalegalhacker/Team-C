<!DOCTYPE html>

<html>
    <head>
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <?php $this->load->view('content/component/metatag'); ?>
        
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo BOOTSTRAP; ?>/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo PLUGINS; ?>/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo DIST_CSS; ?>/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo DIST_CSS; ?>/skins/_all-skins.min.css">
        <!-- general css -->    
        <link rel="stylesheet" href="<?php echo GENERAL; ?>/css/general.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo PLUGINS; ?>/select2/select2.min.css">
        <!-- admin css for justease -->
        <link rel="stylesheet" type="text/css" href="<?php echo DIST_CSS; ?>/justease/admin.css">
        <?php $this->load->view('content/linkrel/rel_header'); ?>
        
    </head>
    <!--<body class="hold-transition skin-blue sidebar-mini">-->
    <body class="hold-transition skin-red layout-top-nav">
        <?php $this->load->view('content/component/gtm_frame'); ?>
        <div class="wrapper">
            <!--</header>-->
            <?php $this->load->view('layout/header/navbar_dashboard'); ?>
            <!-- Left side column. contains the logo and sidebar -->

            <!-- wrapper content -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- warapper content -->
                <section class="content" style="margin-top: 60px;">
                    <!-- Main row -->
                    <div class="row">
                        <!-- load area chart in large mode -->
                        <?php $this->load->view('dashboard/profile/profile_view'); ?>
                        <!--<div class="col-md-8">-->
                        <!--<section>-->
                            <!-- FB Search Result -->
                            <?php $this->load->view('dashboard/main/tables'); ?>
                        <!--</section>-->
                        <!--</div> /.col (LEFT) -->
                    </div>
                </section>
            </div>
            <!-- /.content-wrapper -->
            <!-- load footer view -->
            <?php $this->load->view('layout/footer/footer'); ?>
            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        <script src="<?php echo PLUGINS; ?>/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo BOOTSTRAP_JS; ?>/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo PLUGINS; ?>/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo PLUGINS; ?>/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo PLUGINS; ?>/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo PLUGINS; ?>/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo DIST_JS; ?>/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo DIST_JS; ?>/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
            });
        </script>

        <!-- Select2 -->
        <script src="<?php echo PLUGINS; ?>/select2/select2.full.min.js"></script>
        <script>
            $(function () {
                //Initialize Select2 Elements
                $(".select2").select2();
            });
        </script>
    </body>
</html>
