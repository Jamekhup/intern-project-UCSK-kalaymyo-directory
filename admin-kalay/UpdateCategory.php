<?php session_start(); 
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  }
  require_once("dbcon.php");
  if (isset($_GET['id'])) {

    $id=$_GET['id'];
    $edit="SELECT * FROM create_category WHERE id='$id'";
    $connect= mysqli_query($connection,$edit);

    $post=mysqli_fetch_assoc($connect);
    
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="Shortcut Icon" href="Img/admin.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="css/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="js/jquery-jvectormap.css">
  

 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

  <header class="main-header">
  
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Kalay Directory</p>
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
              <a href="CreateCategory.php"><i class="fa fa-edit text-blue"></i>Create Category</a>
            </li>
           


            
            
           
            
          </ul>
        </li>
          <li>
        <a href="index.php" class="treeview">
            <i class="treeview">
              <i class="fa fa-sign-out"></i>

            </i>
          
            <span>&nbsp; &nbsp;Log Out</span>
            
        </a>
         
        </li>
            
           
            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Category
         
      </h1>
      <ol class="breadcrumb">
        <li><a href="Dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        
      </ol>
        
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title text-blue">
                What you want to change?
              </h3>
             
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             <div class="text-center">
                
             </div>
              <form id="formid" action="UpdateCategoryProcess.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">



                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Category Name" name="Name"  value="<?php echo $post['Name']; ?>">
                  </div>
                  <div class="form-group">
                    <input type="address" class="form-control" placeholder="Enter Category Address" name="Address" value="<?php echo $post['Address']; ?>">
                  </div>

                <input type="hidden" value="<?php echo $post['id']; ?>" name="update_id">
                 
                <div class="cancel">
                  <button class="btn btn-info btn-lg" type="submit" name="update">Update</button>

                  <a href="Category.php"><button onclick="cancel()" class="btn btn-danger btn-lg cancel-btn" type="button">Cancel</button></a>
                </div>
                
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
    </section>
    <!-- /.content -->
  </div>


<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="js/raphael.min.js"></script>
<script src="js/morris.min.js"></script>
<!-- Sparkline -->
<script src="js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->


<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="JS/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
</body>
</html>
