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
    <body class="hold-transition register-page">
        <?php $this->load->view('content/component/gtm_frame'); ?>
        
        <div class="register-box">
            <div class="register-logo">
                <!--<img src="<?php // echo LOGO; ?>" height="90" width="300" alt="js">-->
            </div>

            <div class="register-box-body">
                <h3 class="login-box-msg text-center"><b>#legalhero</b> datang lagi</h3>
                <p class="login-box-msg text-justify">jangan buat mereka menunggu bantu mereka sekarang! kapan lagi?</p>
                
                <!--<p class="login-box-msg"><?php // echo $status;?></p>-->
                <form action="<?php echo base_url('/service/submit_reset_password')?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Retype password" name="re_password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>

                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <a href="<?php echo base_url(); ?>" class="text-center">Home</a> /
                                <a href="<?php echo base_url('/user/login');?>">Back to Login</a>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                        </div>
                    </div>
                </form>
<!--                <a href="<?php echo base_url();?>">Back to Login</a>-->
            </div>
        </div>
        
        <!-- link rel footer admin -->
        <?php $this->load->view('content/linkrel/rel_footeradmin'); ?>
    </body>
</html>
