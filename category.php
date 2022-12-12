<?php 
require_once("admin-kalay/dbcon.php");
      $Select= "SELECT * FROM create_category ORDER BY Name";
      $connect= mysqli_query($connection, $Select);

// require_once("admin-kalay/dbcon.php");
      $Select= "SELECT * FROM create_category ORDER BY Name";
      $con= mysqli_query($connection, $Select);
      

      //for list
      // get categroy url
    if (isset($_GET['name'])) {
      $getUrl = $_GET['name'];
      $postSql = "SELECT * FROM post WHERE Category='$getUrl' ORDER BY id DESC LIMIT 5";
      $postCon = mysqli_query($connection,$postSql);
      

      
    }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- for title -->
  <title><?php echo $getUrl; ?> business in Kalaymyo - Kalymyo Directory</title>
  
<?php include('inc/head.php'); ?>
<link rel="stylesheet" href="css/category.css">
</head>
<body>


<div class="area category_bg">
<div class="container-fluid stickytop mynav">
<div class="row">
<div class="col-12">
<nav class="navbar navbar-expand-lg navbar-light">
 <?php 
   		include('inc/nav.php'); 
   		
   ?>

</nav>
</div>
</div>
</div>
</div>
<br>
<!-- end nav -->

<!-- category -->
<div class="container-fluid category">
   
<div class="row">
	

 

<div class="col-md-8" id="postappend">	
<h2><?php echo $getUrl; ?></h2>
	
<h2><?php echo $name; ?></h2>
<?php if ($postCon->num_rows >0) {
	?>

		<?php while($postCat = mysqli_fetch_assoc($postCon)){
?>

<div class="show_Cat">
    <br>
<h3  class="cath3"><?php echo $postCat['Name']; ?></h3><br>
<ul style="font-family:pyidaungsu; list-style-type:none; margin-left:-35px;">
<li class="fa fa-map-marker">&nbsp; Address&nbsp; :&nbsp;<?php echo $postCat['Name']; ?></li><br><br>
<li class="fa fa-phone">&nbsp; Phone&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $postCat['PhoneNumber']; ?></li>
</ul>
<p class="small text-muted">
<b class="fa fa-clock-o text-warning">&nbsp;&nbsp;Posted On&nbsp;&nbsp; :&nbsp;<?php echo date('d-M-Y',strtotime($postCat['Created_at'])); ?></b>
</p>
</div>
<?php 
$postid = $postCat['id']; 
$postcat = $postCat['Category'];
?>

<?php
  
	} ?>

<?php
}else{
?>
	<div class="container">
		
		<h2><div class="col-md-6 offset-md-3" style="padding:30px;">
			<h3 class="text-center">.....No Post Found.....</h3>
		</div></h2>
	</div>
<?php
} ?>

 <div id="remove">
  <button name="morepost" id="morepost" data-postid="<?php echo $postid; ?>" data-postcat="<?php echo $postcat; ?>" class="btn btn-warning btn-block">....Load More....</button>   
</div>





</div>


<div class="col-md-4 Cat_list">
<h2 class="text-center">Categories</h2>
<div class="cat_data listWrapper">
<ul>
	<?php 
            if ($con->num_rows>0) {
             ?>
             <?php
             while($post = mysqli_fetch_assoc($con)) {

        ?>
<li><a href="category.php?name=<?php echo $post['Name']; ?>" class="list-group-item list-group-item-action "><?php echo $post['Name']; ?></a></li><br>

 	<?php  

           }  
         ?>
         <?php  
         } 
        ?>

</ul>
</div>
</div>
</div>
</div>
<br>
<br>

<!-- footer -->
<?php include('inc/footer.php'); ?>

  <script>
    $(document).ready(function(){
      $(document).on('click',"#morepost", function(){
        var loadmore= $(this).data("postid");
        var cat = $(this).data('postcat');
        $('#morepost').html("loading....");
        $.ajax({
          url:"fetch_post.php",
          method:"POST",
          dataType:"text",
          data:{lastid:loadmore,postcat:cat},
          success:function(data){
            if (data !='') {
              $("#remove").remove();
              $("#postappend").append(data);
            }else{
              $("#morepost").html('No More Post..');
            }
          }
        });
      });
    });
  </script>


</body>
</html>

<!-- for more post loading -->
