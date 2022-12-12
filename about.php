<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kalemyo Business Directory-About</title>
	<?php include('inc/head.php'); ?>
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	
	<script src="js/swiper.js"></script>
	<script src="js/swiper.min.js"></script>

	<link rel="stylesheet" href="css/about.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
	<div class="area about-bg">
		<div class="container-fluid stickytop mynav">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light">
					  <?php include('inc/nav.php'); ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="about" >	
		<h1 class="text-center">အကြောင်းအရာ</h1>
		<br>
		<p class="text-center">KalayMyo Directory သည် ကလေးမြို့အတွင်းရှိ စီးပွားရေးနှင့် ၀န်ဆောင်မှုလုပ်ငန်းများကို အဆင်ပြေလွယ်ကူစွာ ရှာဖွေချိတ်ဆက်နိူင်ရန် ရည်ရွယ်ထားသော  Website ဖြစ်ပါသည်။<br>
		KalayMyo Directory တွင် လုပ်ငန်းအမျိုးအစား ၅၀ကျော်ပါ၀င်ပြီး အသုံးပြုသူများအတွက် အကောင်းဆုံး အထောက်အကူဖြစ်စေရန်  ဖန်တီးထားသော website ဖြစ်ပါသည်။ KalayMyo Directory သည် Myanmar Web Share တွင် Intern ဆင်းကြသော  Kalay Computer University ( 2019-2020) Final Year ကျောင်းသား/သူများ၏ Internship Project ဖြစ်ပါသည်။<br>
		 KalayMyo Directory သည် Myanmar Web Share ၏ လမ်းညွှန်မှုဖြင့်‌‌ရေးသားထားသော Website တစ်ခုဖြစ်ပါသည်။ Myanmar Web Share သည် Computer Basic သာမက  website Development နည်းပညာများကိုလည်း သင်ကြားပေးလျှက်ရှိသော သင်တန်းကျောင်းဖြစ်ပါသည်။</p>
	</div>
 <hr style="border:1px solid red;width:80%;">
	<div class="container member">
		<h1 class="text-center">Team Member</h1>
		<p class="text-center">KalayMyo Directory ကို‌ဖန်တီးရေးသားကြသော(၂၀၁၉-၂၀၂၀)ပညာသင်နှစ် Computer Universityမှ  နောက်ဆုံးနှစ်ကျာင်းသား/သူများ</p>
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide" style="background-image:url(img/nyi.jpeg)"><p class="text-center"> Mg Nyi Nyi Aung</p></div>
		      <div class="swiper-slide" style="background-image:url(img/tetn.jpg)"><p class="text-center">Mg Thet Naing Oo</p></div>
		      <div class="swiper-slide" style="background-image:url(img/mic.jpeg)"><p class="text-center">Mg lal Nun Ceu</p></div>
		      <div class="swiper-slide" style="background-image:url(img/kyaw.jpeg)"><p class="text-center">Mg Kyaw Thiha</p></div>
		      <div class="swiper-slide" style="background-image:url(img/shin.jpeg)"><p class="text-center"> Mg Shine Htet Aung </p></div>
		      <div class="swiper-slide" style="background-image:url(img/cing.jpeg)"><p class="text-center">Ma Pau Lian Cing</p></div>
		      <div class="swiper-slide" style="background-image:url(img/ni.jpg)"><p class="text-center">Ma Ni Than Par</p></div>
		      <div class="swiper-slide" style="background-image:url(img/zaii.jpeg)"><p class="text-center">Ma Zai Thang Mawii</p></div>
		      <div class="swiper-slide" style="background-image:url(img/mwi.jpeg)"><p class="text-center">Ma Thian Nei Mawi</p></div>
		      <div class="swiper-slide" style="background-image:url(img/chit.jpeg)"><p class="text-center">Ma Chit Su Ma</p></div>
		      <div class="swiper-slide" style="background-image:url(img/siri.jpg)"><p class="text-center">Ma Sirilily Wan</p></div>
		      <div class="swiper-slide" style="background-image:url(img/th.jpg)"><p class="text-center">Ma Theint Inzali Soe</p></div>
		      <div class="swiper-slide" style="background-image:url(img/ya.jpeg)"><p class="text-center">Ma Yati Oo</p></div>
		    </div>
		    <!-- Add Pagination -->
		  </div>
	</div>
</div>	
<div>

<?php include('inc/footer.php'); ?>


	  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</div>
</body>
</html>