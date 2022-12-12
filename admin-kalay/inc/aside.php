    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="Img/logo.jpg" class="img-circle" alt="Kalay Directory Logo">
        </div>
        <div class="pull-left info">
          <p>Kalay Directory Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="Dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
       
            <li class="treeview">
          <a href="#">
            <i class="fa fa-lock"></i>
            <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="Admins.php"><i class="fa fa-user-secret text-blue"></i>Admins</a>
            </li>

            <li>
              <a href="CreateAdmin.php"><i class="fa fa-edit text-blue"></i>Create Admin</a>
            </li>
            
            
            
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-paper-plane"></i>
            <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="CreatePost.php"><i class="fa fa-edit text-blue"></i>Create Post</a>
            </li>
           
            
            
          </ul>
        </li>
                <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="Category.php"><i class="fa fa-bars text-blue"></i>Category</a>
            </li>
            <li>
              <a href="CreateCategory.php"><i class="fa fa-edit text-blue"></i>Create Category</a>
            </li>
            
            
            
           
            
          </ul>
        </li>
        <li>
        <a href="logout.php" class="treeview">
            <i class="treeview">
              <i class="fa fa-sign-out"></i>

            </i>
          
            <span>&nbsp; &nbsp;Log Out</span>
            
        </a>
         
        </li>

      </ul>


    </section>
    <!-- /.sidebar -->