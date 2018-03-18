<!DOCTYPE html>
<html>
    <head>
        <!-- google analytics -->
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <!-- metatag -->
        <?php $this->load->view('content/component/metatag'); ?>
        <!-- link rel header admin -->
        <?php $this->load->view('content/linkrel/rel_headeradmin'); ?>
    </head>
    <body class="hold-transition login-page">
        <?php $this->load->view('content/component/gtm_frame'); ?>

        <!-- login box -->
        <div class="login-box">
            <div class="login-box-body">
                <div class="login-logo">
                <!--<img src="<?php echo LOGO;  ?>" height="90" width="300" alt="js">-->
            </div>
                <!--<p class="login-box-msg"><?php echo $status; ?></p>-->
                <h3 class="login-box-msg text-center"><b>#legalhero</b> datang lagi</h3>
                <p class="login-box-msg text-justify">jangan buat mereka menunggu bantu mereka sekarang! kapan lagi?</p>
                
                
                <form action="<?php echo base_url('/user/login') ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $password; ?>">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>


                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <a href="<?php echo base_url(); ?>" class="text-center">Home</a> /
                                <a href="<?php echo base_url('/user/reset'); ?>">Lupa Password?</a> 
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                        </div><!-- /.col -->
                    </div>
                    <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
                            <i class="fa fa-facebook"></i> Login dengan Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat">
                            <i class="fa fa-google-plus"></i> Login dengan Google+
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- link rel footer admin -->
        <?php $this->load->view('content/linkrel/rel_footeradmin'); ?>
    </body>
</html>
