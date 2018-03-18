<!DOCTYPE HTML>
<!-- author: justease.id -->
<html lang="id">
    <head>
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <?php $this->load->view('content/component/metatag_article'); ?>
        <?php $this->load->view('content/linkrel/rel_header'); ?>
        <?php $this->load->view('content/linkrel/rel_headerblog'); ?>
    </head>
    <body>
        <?php $this->load->view('content/component/gtm_frame'); ?>

        <!-- Navbar -->
        <?php $this->load->view('layout/header/navbar_blog'); ?>

        <!-- content case list -->
        <!--        <div class="content-wrapper">-->
        <div class="container" style="margin-top: 60px;">
            <section class="content">
                <?php $this->load->view('content/article/feed'); ?>
            </section>
        </div>

        <!-- footer section -->
        <?php $this->load->view('layout/footer/footer'); ?>

        <!-- js footer section -->
        <?php $this->load->view('content/linkrel/rel_footerblog'); ?>
        <?php $this->load->view('content/linkrel/rel_footer'); ?>

    </body>
</html>
