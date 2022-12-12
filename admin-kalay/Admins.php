<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>




<!DOCTYPE html>
<html>
<head>
  <?php include('inc/head.php'); ?>
  <link rel="stylesheet" href="css/main.css">
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
    

     <?php  
      require_once("dbcon.php");
      $Select= "SELECT * FROM admin_category ORDER BY id Desc";
      $connect= mysqli_query($connection, $Select);
    ?>

    <section class="content ">
     
      <div class="row">
        <!-- Data Table Here -->
            <div class="box-body">
              <?php 
                  if (isset($_SESSION['delete'])) {
               ?>
                  <div class="alert alert-info alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-center text-danger">Deleted successfully.</p>
                  </div>
               <?php     
                 unset($_SESSION['delete']); }
               ?>
                
              <table id="example2" class="table table-bordered">
                <thead class="thead">
                <tr>
                  <th>AdminName</th>
                  <th>AdminEmail</th>
                  <th>AdminRole</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>

                <tbody class="tbody">

                  <?php 
                if ($connect->num_rows>0) {
                 ?>
                 <?php
                 while ($post=$connect->fetch_assoc()) {

                  ?>



                <tr>
                 <td class="mytd"><?php echo $post['AdminName']; ?></td>
                 <td class="mytd"><?php echo $post['AdminEmail']; ?></td>
                 <td class="mytd">Super</td>
                
                 <td>
                       &nbsp;&nbsp; &nbsp;


                      <a id="deletePost" onclick="deletePost()" href="DeleteAdminProcess.php?id=<?php echo $post['id']; ?>"><i class="fa fa-trash text-danger"></i></a>
                  </td>
                 
                 



                 
                </tr>
                  <?php  

                   }  
                 ?>
                 <?php  
                 } 
                ?>
                
              
                </tbody>
               
              </table>
            </div>
       
      </div>
        
    </section>

  </div>

  <?php include('inc/footer.php'); ?>
  </div>
</body>
</html>


<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });

  function deletePost(){
    if (confirm('Are you sure want to delete?')) {
      document.getElementById('postdelete').submit();
    }else{
      event.preventDefault();
    }
  }

</script>