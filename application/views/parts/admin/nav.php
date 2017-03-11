  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>admin/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>LS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ocean Life </b>Science</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>control/img/admin/logo.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin Control</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>control/img/admin/logo.jpg" class="img-circle">

                <p>
                  Admin Control
                  <small>Every change will effect on website</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <!--<a href="<?php echo  base_url(); ?>process/logout.php" class="btn btn-default btn-flat">Sign out</a>-->
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>control/img/admin/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin Profile</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
           <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url();?>admin/category/view">
            <i class="fa fa-pie-chart"></i>
            <span>Product Category</span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Product</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/product/add"><i class="fa fa-user"></i> <span>Add</a></li>
            <li><a href="<?php echo base_url();?>admin/product/view"><i class="fa fa-user"></i> <span>View</a></li>
            
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Certificate</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/certificate/add"><i class="fa fa-user"></i> <span>Add</a></li>
            <li><a href="<?php echo base_url();?>admin/certificate/view"><i class="fa fa-user"></i> <span>View</a></li>
            
          </ul>
        </li>
		<li>
          <a href="<?php echo base_url();?>admin/about/add">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            About OLS
            
          </a>
          
        </li>
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>About OLS</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url();?>admin/about/add"><i class="fa fa-user"></i> <span>Add</a></li>
            <li><a href="<?php// echo base_url();?>admin/about/view"><i class="fa fa-user"></i> <span>View</a></li>
            
          </ul>
        </li>-->
        <li><a href="<?php echo base_url();?>admin/gallery"><i class="fa fa-envelope" aria-hidden="true"></i> Gallery</a></li>
        
        <!--<li><a href="<?php echo base_url();?>admin/otherPages"><i class="fa fa-envelope" aria-hidden="true"></i> Other Pages</a></li>-->
        
        
        
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
