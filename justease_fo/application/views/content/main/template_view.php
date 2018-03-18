<!DOCTYPE HTML>
<!-- author: justease.id -->
<html lang="id">
    <head>
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <?php $this->load->view('content/component/metatag'); ?>
        <?php $this->load->view('content/linkrel/rel_header'); ?>
    </head>
    <body>
        <?php $this->load->view('content/component/gtm_frame'); ?>

        <!-- Navbar -->
        <?php $this->load->view('layout/header/navbar'); ?>

        <!-- highlight -->
        <?php $this->load->view('content/main/highlight'); ?>

        <!-- header title -->
        <?php $this->load->view('content/main/procedure'); ?>

        <!-- content case list -->
        <?php $this->load->view('content/main/case'); ?>

        <!-- carousel -->
        <?php // $this->load->view('content/main/opini'); ?>

        <!-- footer section -->
        <?php $this->load->view('layout/footer/footer'); ?>

        <!-- js footer section -->
        <?php $this->load->view('content/linkrel/rel_footer'); ?>
    </body>
</html>
