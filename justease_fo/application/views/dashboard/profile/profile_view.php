<div class="col-md-3" style="margin-left: 40px;">
    <!-- Profile Image -->
    <div class="box box-danger">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?php echo USER_ICON;?>" alt="<?php echo $name;?>">
            <h3 class="profile-username text-center"><?php echo $name;?></h3>
            <p class="text-muted text-center"><?php echo @$username;?></p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Campaign</b> <a class="pull-right"><?php echo $campaign;?></a>
                </li>
                <li class="list-group-item">
                    <b>Donasi</b> <a class="pull-right"><?php echo $donasi;?></a>
                </li>
            </ul>
            <a href="<?php echo base_url();?>" class="btn btn-danger btn-block" target="_blank"><b>Logout</b></a>
        </div>
    </div>

    <!-- About Me Box -->
    
    <?php 
    if($active_menu=="donasi"){
        $this->load->view('dashboard/menu/menu_donasi'); 
    }else if($active_menu=="campaign"){
        $this->load->view('dashboard/menu/menu_campaign'); 
    }else if($active_menu=="log"){
        $this->load->view('dashboard/menu/menu_log'); 
    }else if($active_menu=="profile"){
        $this->load->view('dashboard/menu/menu_profile'); 
    }else if($active_menu=="invoice"){
        $this->load->view('dashboard/menu/menu_donasi'); 
    }else {
        $this->load->view('dashboard/menu/menu_log'); 
    }
    ?>
</div><!-- /.col -->