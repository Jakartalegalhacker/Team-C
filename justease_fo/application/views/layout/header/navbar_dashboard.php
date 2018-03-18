<nav class="navbar navbar-default navbar-fixed-top" role="navigation" 
     style="background-color:white;border-style: solid;border-width: 0px 0px 5px 0px;
     border-color: #cb2d3e;">
    <div class="container">

        <!-- logo&header -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse">
                <a href="#">
                    <img src="<?php echo USER_ICON; ?>" height="32" width="32" class="user-image" alt="User Image">
                </a>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="<?php echo BRAND; ?>" style="height: 30px;" alt="justease.id">
            </a>
        </div>

        <!-- navbar items -->
        <div class="collapse navbar-collapse" id="myNavbar">	
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user user-menu notifications-menu">
                    <a href="#" class="dropdown-toggle">
                        <img src="<?php echo USER_ICON; ?>" class="user-image" alt="User Image">
                        <?php echo $name; ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>