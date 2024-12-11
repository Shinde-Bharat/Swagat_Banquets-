<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>
	
	<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    body {
      background: #eee;
    }

    swiper-container {
      width: 100%;
      height: 600px;
    }
  </style>
	</style>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<?php include_once('includes/header.php');?>

  <swiper-container class="mySwiper3" space-between="30" pagination="true" pagination-clickable="true">
    <swiper-slide><img src="images/1.jpg"></img></swiper-slide>
	
    <swiper-slide><img src="images/1.jpg"></img> </swiper-slide>
    <swiper-slide><img src="images/2.jpg"></img></swiper-slide>
    <swiper-slide><img src="images/3.jpg"></img></swiper-slide>
    <swiper-slide><img src="images/4.jpg"></img></swiper-slide>
    <swiper-slide><img src="images/5.jpg"></img></swiper-slide>
    <swiper-slide><img src="images/6.jpg"></img></swiper-slide>
   </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


	<!--		<div class="w3layouts-banner">
				<div class="container">
					<div class="w3-banner-info">
						<div class="w3l-banner-text">
							<h2>Swagat Banquets </h2>
							<p>We create your special day</p>
						</div>
					</div>
				</div>
			</div>
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php  echo htmlentities($row->PageDescription);?>.</p>
						</div>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <?php  echo htmlentities($row->Email);?></p>
						</div>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +<?php  echo htmlentities($row->MobileNumber);?></p>
						</div>
						<div class="clearfix"> </div>
					<?php $cnt=$cnt+1;}} ?></div>
				</div>
			</div>
		</div>
	</div>
	 //banner
	banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="wthree-bottom-grids">
				<div class="col-md-6 wthree-bottom-grid">
					<div class="w3-agileits-bottom-left">
						<div class="w3-agileits-bottom-left-text">
							<h3>Planning from start to finish</h3>
							<p>Elevate your event experience with our sophisticated and seamless banquets booking system. Whether you're planning a corporate gathering, wedding celebration, or any special event, we've got you covered.Our user-friendly platform simplifies the entire booking process, ensuring a stress-free and enjoyable planning journey.</p></div>
					</div>
				</div>
				<div class="col-md-6 wthree-bottom-grid">
					<div class="w3-agileits-bottom-left w3-agileits-bottom-right">
						<div class="w3-agileits-bottom-left-text">
							<h3>LET THE EXPERTS RUN YOUR WEDDING</h3>
							<p>Unleash the potential of stress-free event planning with our banquet booking system. Transform your vision into reality by effortlessly reserving the perfect venue for your special occasion. Our platform empowers you to choose from a curated selection of exquisite banquet spaces, set personalized menus,</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	
<?php include_once('includes/footer.php');?>
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/modernizr.custom.js"></script>

</body>	
</html>