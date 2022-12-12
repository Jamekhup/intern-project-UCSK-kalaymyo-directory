<?php 
error_reporting(0);
	require_once("admin-kalay/dbcon.php");
	$output='';

    $getId= $_POST["lastid"];
    $getCat = $_POST['postcat'];

	$select="SELECT * FROM post WHERE id < ".$getId." AND Category='$getCat' ORDER BY id DESC LIMIT 5";
	$result=mysqli_query($connection,$select);
	if (mysqli_num_rows($result)>0) {
		while ($postCat=mysqli_fetch_assoc($result)) {
			$postid = $postCat['id'];
			$mycat = $postCat['Category'];
			$output .='


            <div class="show_Cat">
            <br>
            <h3 class="cath3">'.$postCat["Name"].'</h3><br>
            <ul style="font-family:pyidaungsu; list-style-type:none; margin-left:-35px;">
            <li class="fa fa-map-marker">&nbsp; Address&nbsp; :&nbsp;'.$postCat["Address"].'</li><br><br>
            <li class="fa fa-phone">&nbsp; Phone&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;'.$postCat["PhoneNumber"].' </li>
            </ul>
            <p class="small text-muted">
            <b class="fa fa-clock-o text-warning">&nbsp;&nbsp;Posted On&nbsp;&nbsp; :&nbsp;'. date('d-M-Y',strtotime($postCat['Created_at'])) .'</b>
            </p>
            </div>
			
			

			';
		    
		}

		$output .='
		 <div id="remove">
          <button name="morepost" id="morepost" data-postid="'. $postid .'" data-postcat="'.$mycat.'" class="btn btn-warning btn-block">....Load More....</button>   
        </div>
		';

		
		
	}

    echo $output;
 ?>