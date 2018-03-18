<nav class="navbar navbar-default navbar-fixed-top" role="navigation" 
     style="background-color:white;border-style: solid;border-width: 0px 0px 5px 0px;
     border-color: #cb2d3e;">
    <div class="container">

        <!-- logo&header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="<?php echo BRAND; ?>" style="height: 30px;" alt="justease.id">
            </a>
        </div>

        <!-- navbar items -->
        <div class="collapse navbar-collapse" id="myNavbar">	
            <ul class="nav navbar-nav navbar-right">
                <button type="button" class="btn btn-default button-1 navbar-btn"><a href="<?php echo base_url('/user/register'); ?>">Daftar</a></button>	
                <button type="button" class="btn btn-default button-1 navbar-btn"><a href="<?php echo base_url('/user/login'); ?>">Masuk</a></button>	
            </ul>
        </div>
    </div>
</nav>