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
      $Select= "SELECT * FROM post ORDER BY id Desc";
      $connect= mysqli_query($connection, $Select);


     
    ?>


    <section class="content"> 

      <div class="row">

        <!-- Data Table Here -->
            <div class="box-body">
              <a class="btn btn-primary" href="CreatePost.php" role="button"><i class="fa fa-edit"> &nbsp;Create Post</i></a>
              <?php 
                  if (isset($_SESSION['update_success'])) {
               ?>
                  <div class="alert alert-info alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-center text-white">Updated successfully..</p>
                  </div>
               <?php     
                 unset($_SESSION['update_success']); }
               ?>



              <?php 
                  if (isset($_SESSION['post_success'])) {
               ?>
                  <div class="alert alert-info alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-center text-white">Posted successfully..</p>
                  </div>
               <?php     
                 unset($_SESSION['post_success']); }
               ?>



              <?php 
                  if (isset($_SESSION['delete'])) {
               ?>
                  <div class="alert alert-info alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-center text-danger">Deleted successfully..</p>
                  </div>
               <?php     
                 unset($_SESSION['delete']); }
               ?>
                
              <table id="example2" class="table table-bordered">
                <thead class="thead">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>PhoneNumber</th>
                    <th>Admin</th>
                    <th>Category</th>
                    <th>KeyWord</th>
                    <th>Created_at</th>
                    <th>Update/Delete</th>
                  </tr>
                </thead>
                <tbody class="tbody">

                  <?php 
                if ($connect->num_rows>0) {
                 ?>
                 <?php
                 foreach ($connect as $key => $post) {

                  ?>
                  


                <tr>
                 <td class="mytd"><?php echo $key + 1; ?></td>
                 <td class="mytd"><?php echo $post['Name']; ?></td>
                 <td class="mytd"><?php echo $post['Address']; ?></td>
                 <td class="mytd"><?php echo $post['PhoneNumber']; ?></td>

                 <!-- for admin Email -->







                 <!-- For admin Email -->
                 <td class="mytd"><?php echo $_SESSION['name']; ?></td>
                 <td class="mytd"><?php echo $post['Category']; ?></td>
                 <td class="mytd">
                   <?php echo $post['Description']; ?>
                 </td>
                 <td class="mytd">
                  <?php 
                     $time= $post['Created_at'];        
                  echo date("d/M/Y", strtotime($time)) ?></td>


                 <td>
                      &nbsp; &nbsp;<a href="UpdatePost.php?id=<?php echo $post['id']; ?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;&nbsp; &nbsp;


                      <a id="deletePost" onclick="deletePost()" href="DeletePostProcess.php?id=<?php echo $post['id']; ?>"><i class="fa fa-trash text-danger"></i></a>
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





<!-- for deleting table data js -->
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


