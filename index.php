<?php  
	
	
		require_once("admin-kalay/dbcon.php");

	$query;

	if (isset($_GET['submit'])) {

		$search= mysqli_real_escape_string($connection, $_GET['search']);
		$select= "SELECT * FROM post WHERE Category LIKE'" .$search. "%'";
		@$query= mysqli_query($connection, $select);

		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalemyo Business Directory</title>
	<?php include('inc/head.php'); ?>
	<meta name="description" content="Discover best local businesses, coupons and discounts added by your neighborhood small businesses &amp; retail stores anytime in Kalaymyo Business Directory. The best Directory for Kalaymyo, Sagaing.">
	
	<meta name="keywords" content="Kalaymyo Directory, kalay Directory, Kalaymyo, kalay, Kalemyo, Kalemyo Directory, Kale Directory, Best Local Business Directory, Local Business Directory, Local Business Directory Kalaymyo, Business in Kalaymyo, The best in Kalaymyo">
</head>
<body>

	
	<div class="area">
		<div class="container-fluid stickytop mynav">
			<div class="col-12">
				<nav class="navbar navbar-expand-lg navbar-light">
					<?php include('inc/nav.php'); ?>
				</nav>
			</div>
			
		</div>
		<!--search box-->
		<div class="container search">
			<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1>&nbsp;&nbsp;<span class="text-danger">--</span>Search Everyting You Need <span class="text-danger">--</span></h1><br>
				<form action="" class="search-box" method="">
                    <input type="search" id="search"  placeholder="" autofocus name="search" onkeyup="searching()" autocomplete="off">
                    <!-- icon search -->
                    <div class="search-form" >
                    	
                        <button type="submit" name="submit"><i class="fas fa-search"></i></button>
                     </div>

                    <!-- icon search -->
                    <div class="world-form">
                        <i class="fas fa-globe"></i>
                     </div>
                </form>
			</div>
			</div>
			<!-- result -->
		<div class="container result">
			<div class="col-md-8 offset-md-2">
				
					<ul class="list-group" id="sResult">
		
					</ul>
				
			</div>
		</div>
	</div> 
		</div>
		

<!-- Welcome start -->
	<div class="container welcome">
		<div class="col-md-8 offset-md-2">
			<h1 class="text-center">The Kalemyo Business Directory</h1>
			<h3 class="text-center">KalayMyo Directory သည် ကလေးမြို့တွင်ရှိသော Business လုပ်ငန်းများအားလုံးကို တစ်နေရာထဲတွင် လွယ်ကူလျင်မြန်စွာ ရှာဖွေနိုင်စေရန် ရေးသားထားသော Website ဖြစ်ပါတယ်။
            <h6 class="text-center">Let's uncover the best places to eat, drink, and shop nearest to you.</h6>

            <div class="container icon">
            	<div class="row">
            		<div class="col-md-4 text-center">
            			<div class="one">
            				<a href="category.php?name=Library"><i class="fa fa-book animated wobble"></i></a>
            			</div>
            		</div>
            		<div class="col-md-4 text-center">
            			<div class="two">
            				<a href="category.php?name=Car%20Service"><i class="fa fa-car animated wobble"></i></a>
            			</div>
            		</div>
            		<div class="col-md-4 text-center">
            			<div class="three">
            				<a href="category.php?name=Bank%20&%20Insurance%20Company"><i class="fas fa-hand-holding-usd animated wobble"></i></a> 
            			</div>
            		</div>
            	</div>
            </div>
		</div>
	</div>
<!-- welcome end -->

<!-- mmwebshare -->
	<div class="container mmweb">
		<h2 class="text-center ads">Advertisement</h2>
		<div class="row">
			<div class="col-md-6">
				<div class="mmweb_img">
					<img src="img/mws.gif" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="mmweb_contact">
					<p>ကလေးမြို့မှာ Computer Basic သာမက Website ဖန်တီးခြင်း နည်းပညာများကို လည်း Myanmar Web Share က အကောင်းဆုံး သင်ကြား ပို့ချပေးနေပါသည်။</p>
					<p>သင်ကြား ပို့ချပေးသော Course များ -</p>
					<p class="course"><i class="fas fa-check-double"></i>Computer Basic Course (Level 1, 2)</p>
					<p class="course"><i class="fas fa-check-double"></i>Photoshop Design Course</p>
					<p class="course"><i class="fas fa-check-double"></i>Web Design (Front-End) Course</p>
					<p class="course"><i class="fas fa-check-double"></i>Web Development Course</p>
					<p class="course"><i class="fas fa-check-double"></i>Laravel Framework Course</p>
					<p class="course"><i class="fas fa-check-double"></i>Wordpress CMS Course</p>
					<p>အသေးစိတ်ကို Myanmar Web Share ၏ official Facebook Page နှင့် Website တွင် ဖော်ပြထားပါသည်။</p>

					<button class="btn"><a href="https://www.facebook.com/eclkalaymyo">Facebook-Page</a></button>
					<button class="btn"><a href="https://www.myanmarwebshare.com">Web-Page</a></button>
				</div>
			</div>
		</div>
	</div>
	<!-- mmwebshare end -->

	<!-- Categories -->
    <section class="main-block">
        <div class="container category">
            <h2 class="text-center">Popular Categories</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="find-place-img_wrap">
                        <div class="grid">
                            <figure class="effect-ruby">
                                <a href="category.php?name=Private%20School"><img src="img/find-place1.jpg" class="img-fluid" alt="img13" /></a>
                                <figcaption>
                                    <h5>Public & Private School</h5>
                                    <p>40+ Listings</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <a href="category.php?name=Bars%20and%20Restaurant"><img src="img/find-place2.jpg" class="img-fluid" alt="img13" /></a>
                                        <figcaption>
                                            <h5>Restaurants & Bars</h5>
                                            <p>100+ Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <a href="category.php?name=Office"><img src="img/find-place3.jpg" class="img-fluid" alt="img13"https://www.kalaymyodirectory.com/category.php?name=Office /></a>
                                        <figcaption>
                                            <h5> Universities & Government Office</h5>
                                            <p>100+ Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <a href="category.php?name=Hotel"><img src="img/find-place4.jpg" class="img-fluid" alt="img13" /></a>
                                        <figcaption>
                                            <h5>Hotels </h5>
                                            <p>40+ Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                        <a href="category.php?name=Hospitals%20And%20Clinics"><img src="img/find-place5.jpg" class="img-fluid img-thumbnai" alt="img13" /></a>
                                        <figcaption>
                                            <h5>Hospitals & Clinics</h5>
                                            <p>30+ Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--categories end -->
	<hr style="border:1px solid red;width: 80%;">
	<!-- lastest update -->
	<div class="container lastest_update">
	<h2 class="text-center lastest">Lastest Update</h2>
	<div class="col-md-8 offset-md-2">
	<div class="slider responsive">
	<div class="update"><img src="img/AirPump.jpg"></div>
	<div class="update"><img src="img/AutoDetailing.jpg"></div>
	<div class="update"><img src="img/bakery.jpg"></div>
	<div class="update"><img src="img/bamboo.jpg"></div>
	<div class="update"><img src="img/Cafe&Colddrink.jpg"></div>
	<div class="update"><img src="img/resturant.jpg"></div>
	<div class="update"><img src="img/gasStation.jpg"></div>
	<div class="update"><img src="img/clothingStore.jpg"></div>
	<div class="update"><img src="img/carservice.jpg"></div>
	<div class="update"><img src="img/furniture.jpg"></div>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="slick/slick.js"></script>
	
	<script type="text/javascript">
	   $('.responsive').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 3,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});

	   // for search function
			   function searching(){
				let get = $('#search').val();

				$.ajax({
					method:"POST",
					url:"searchProcess.php",
					data:{value:get},
					success:function(searchResult){
						$('#sResult').html(searchResult);
					}
				});
			}
  	</script>

	<?php include('inc/footer.php'); ?>
</body>
</html>
