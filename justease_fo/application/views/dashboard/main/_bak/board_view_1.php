<!DOCTYPE HTML>
<!-- author: justease.id -->
<html lang="id">
    <head>
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <?php $this->load->view('content/component/metatag'); ?>

        <?php $this->load->view('dashboard/linkrel/rel_headerboard'); ?>
        <?php $this->load->view('content/linkrel/rel_header'); ?>
    </head>
    <body>
        <?php $this->load->view('content/component/gtm_frame'); ?>

        <!-- Navbar -->
        <?php $this->load->view('layout/header/navbar_dashboard'); ?>

        <div style="margin-top: 60px;">
            <?php $this->load->view('dashboard/profile/profile_view'); ?>
            <?php $this->load->view('dashboard/main/tables'); ?>
        </div>

        <!-- footer section -->
        <?php $this->load->view('layout/footer/footer_dashboard'); ?>

        <!-- js footer section -->
        <?php $this->load->view('content/linkrel/rel_footer'); ?>
        <?php $this->load->view('dashboard/linkrel/rel_footerboard'); ?>
    </body>
</html>
