<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  }
?>
<?php  
      require_once("dbcon.php");
      $Select= "SELECT * FROM create_category ORDER BY Name";
      $connect= mysqli_query($connection, $Select);
?>


<!DOCTYPE html>
<html>
<head>
 <?php include('inc/head.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

  <header class="main-header">
   <?php include('inc/nav.php'); ?>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php include('inc/aside.php'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-info">
        Create Post
         
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
                What's on your mind?
              </h3>
             
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             <div class="text-center">
                <?php 
                if (isset($_SESSION['notimg'])) {
              ?>
                  <div class="alert alert-success alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p>Please upload an image file!!!</p>
                  </div>
              <?php
              unset($_SESSION['notimg']);
                }
              ?>
             </div>
              <form id="formid" action="CreatePostProcess.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Name" name="Name">
                </div>
                <div class="form-group">
                <input class="form-control" type="text" placeholder="Address" name="Address">
                </div>
                 <div class="form-group">
                <input class="form-control" type="text" placeholder="PhoneNumber" name="PhoneNumber">
                </div>
                
                <div class="form-group">
                  
                   
                    <select class="form-control" name="CategoryName">
                       <?php 
                      if ($connect->num_rows>0) {
                       ?>
                        <option>-Choose Category-</option>
                       <?php
                 while ($post=$connect->fetch_assoc()) {

                        ?>

                        <option value="<?php echo $post['Name']; ?>"><?php echo $post['Name']; ?></option>
                         <?php  

                             }  
                           ?>
                           <?php  
                           } 
                          ?>
                   
                        
                    </select> 
                   
                </div>
                

              
                <h4 class="text-black">For Keyword</h4>
                <textarea  class="text-black" id="editor1" name="Description" rows="10" cols="80" placeholder="Description">
                                       
                </textarea><br>

                <div class="cancel">
                  <input class="btn btn-success btn-lg" type="submit" name="submit" value="Post">
                  <a href="Dashboard.php"><button onclick="cancel()" class="btn btn-danger btn-lg cancel-btn" type="button">Cancel</button></a>
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
