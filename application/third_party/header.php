<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T</b>MAT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Talent</b>MAT</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">              
              <!-- User Account: style can be found in dropdown.less --> 
			  <?php if($_SESSION['user_name'] =="Admin"){?>
				 <li class="dropdown user user-menu" style="border-right: 1px solid #fff;">
                <a href="<?php echo site_url('Account_management') ?>" style="display: -moz-stack;">
                
                  <span class="hidden-xs"><b>Admin Account Management</b> </span>
                   </a> 
					
              </li>
			   <li class=""><a href="<?php echo base_url('index.php/login');?>" class="" style="display: -moz-stack;font-weight: bold;">Sign out</a></li>
			  
			  <?php }else{ ?>
                           
                           <?php if($this->session->userdata('type') == 3){?>
				  <li class="dropdown user user-menu" style="border-right: 1px solid #fff;">
					<a href="#" style="display: -moz-stack;font-size: 21px;">                
					  <span class="hidden-xs"><b>In Wallet Rs. <span id="wallet_amount"><?php echo $this->wallet_amount;?></span></b> </span>				  
					</a>
				  </li>
				  
			  <?php }?>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('theme/dist/img/pic1.png'); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['user_name'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" style="height: 125px;">
                      <img src="<?php echo base_url('theme/dist/img/pic1.png'); ?>" class="img-circle" alt="User Image" style="height:80px;">
                      <p style="margin-top: 1px;">
                     <?php echo $_SESSION['user_name'];?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--li class="user-body">
                       <div class="pull-left">
                      <a href="<?php echo site_url('Registration/TM_Update_Profile') ?>" class="btn btn-default btn-flat">My Profile</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#" style="color:#03A9F4 !important">FAQ's</a>
                    </div>                   
                  </li-->
                  <!-- Menu Footer-->
                  <li class="user-footer" style="background-color: rgba(206, 202, 202, 0.62);">
                    <div class="pull-left">
                      <a href="<?php echo site_url('Registration/TM_Change_password') ?>" class="btn btn-default btn-flat">Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url('index.php/login');?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
 <?php } ?>
              <!-- Control Sidebar Toggle Button 
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>-->
            </ul>
          </div>
        </nav>
      </header>
