<?php 
session_start();
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
  } ?>

<?php 
  session_start();
  require_once("dbcon.php");
  if (isset($_POST['submit'])) {
    $CategoryName=mysqli_real_escape_string($connection,$_POST['CategoryName']);
    
    if ($CategoryName=='') {
      
      
      header("Location:CreateCategory.php");

      
    }else{
     

      $query ="INSERT INTO create_category(Name) VALUES('$CategoryName')";
      
      if (mysqli_query($connection, $query)) {
        header('location:CreateCategory.php');
    
    }else { 
      echo 'failed';
    }
    }
   }
 ?>