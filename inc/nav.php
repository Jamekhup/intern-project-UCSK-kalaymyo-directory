
<?php 

require_once("admin-kalay/dbcon.php");
      $Select= "SELECT * FROM create_category ORDER BY Name";
      $connect= mysqli_query($connection, $Select);
 ?>

<a class="navbar-brand" href="#"><img src="img/weblogo.png" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"  style="border:none;outline:none;">
	<!-- <span class="navbar-toggler-icon"></span> -->
	<i class="fas fa-bars"></i>
</button>

<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class="nav-link" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">About</a>
  </li>


  

  <li class="nav-item dropdown menu-area">
    <a class="nav-link dropdown-toggle" href="#" id="mega-one" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categories
    </a>
    <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
      <div class="row">
        <?php 
            if ($connect->num_rows>0) {
             ?>
             <?php
             while($post = mysqli_fetch_assoc($connect)) {

        ?>

      	<div class="col-sm-6 col-lg-3">
      		
      		
      		<a href="category.php?name=<?php echo $post['Name']; ?>" class="dropdown-item"><?php echo $post['Name']; ?></a>
      		
      	</div>
      	 <?php  

           }  
         ?>
         <?php  
         } 
        ?>
      		
      
      </div>
    </div>
  </li>





  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
</ul>


</div>