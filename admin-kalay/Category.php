<?php
session_start();
if (empty($_SESSION['admin'])) {
header("Location:index.php");
} ?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="Shortcut Icon" href="Img/admin.png">
<title>Admin Dashboard</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="css/main.css">
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



<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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


<?php
require_once("dbcon.php");
$Select= "SELECT * FROM create_category ORDER BY id Desc";
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
<p class="text-center text-danger">Deleted successfully..</p>
</div>
<?php
unset($_SESSION['delete']); }
?>
<?php
if (isset($_SESSION['update_success'])) {
?>
<div class="alert alert-info alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p class="text-center">Updated successfully..</p>
</div>
<?php
unset($_SESSION['Update']); }
?>
<table id="example2" class="table table-bordered">
<thead class="thead">
<tr>
<th>ID</th>
<th>Category Name</th>

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


<td>
&nbsp; &nbsp;<a href="UpdateCategory.php?id=<?php echo $post['id']; ?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;&nbsp; &nbsp;


<a id="deletePost" onclick="deletePost()" href="DeleteCategoryProcess.php?id=<?php echo $post['id']; ?>"><i class="fa fa-trash text-danger"></i></a>
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
'paging' : true,
'lengthChange': false,
'searching' : false,
'ordering' : true,
'info' : true,
'autoWidth' : false
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