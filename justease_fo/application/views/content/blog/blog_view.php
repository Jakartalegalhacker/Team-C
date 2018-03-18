<!DOCTYPE HTML>
<!-- author: justease.id -->
<html lang="id">
    <head>
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <?php $this->load->view('content/component/metatag'); ?>
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
                <?php $this->load->view('content/blog/feed'); ?>
            </section>
        </div>
<!--        <div class="text-center">
            <a class="button-animated" href="#" role="button">
                <span> Muat Lainnya </span>
            </a>
        </div>-->
        <!--</div>-->

        <!-- footer section -->
        <?php $this->load->view('layout/footer/footer'); ?>

        <!-- js footer section -->
        <?php $this->load->view('content/linkrel/rel_footerblog'); ?>
        <?php $this->load->view('content/linkrel/rel_footer'); ?>

    </body>
</html>
