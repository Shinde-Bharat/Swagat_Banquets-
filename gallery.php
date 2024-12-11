<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

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
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<style>
img {
  --s: 15px;  /* size of the frame */
  --b: 2px;   /* border thickness */
  --w: 300px; /* width of the image */
  --c: #7B3B3B;
  
  width: var(--w);
  aspect-ratio: 1;
  object-fit: cover;
  padding: calc(2*var(--s));
  --_g: var(--c) var(--b),#0000 0 calc(100% - var(--b)),var(--c) 0;
  background:
    linear-gradient(      var(--_g)) 50%/100% var(--_i,100%) no-repeat,
    linear-gradient(90deg,var(--_g)) 50%/var(--_i,100%) 100% no-repeat;
  outline: calc(var(--w)/2) solid #0009;
  outline-offset: calc(var(--w)/-2 - 2*var(--s));
  transition: .4s;
  cursor: pointer;
}
img:hover {
  outline: var(--b) solid var(--c);
  outline-offset: calc(var(--s)/-2);
  --_i: calc(100% - 2*var(--s));
}

inner {
  margin: 0;
  min-height: 250vh;
  display: grid;
  place-content: center;
  align-items: center;
  grid-auto-flow: column;
  gap: 30px;
  background: #e8e8e8;
}

</style>
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
		<?php include_once('includes/header.php');?>
			<div class="wthree-heading">
				<h2>Gallery</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<!-- about-top -->
	<div class="about-top">
		<div class="container">
			<div class="wthree-services-bottom-grids">
				<div class="inner">
				<!--<div class="col-md-4 wthree-services-left">
					<img src="images/gal1.jpg" alt="">
				</div>

                <div class="col-md-4 wthree-services-left">
					<img src="images/ga2.jpg" alt="">
				</div>

				<div class="col-md-4 wthree-services-left">
					<img src="images/ga1.jpg" alt="">
				</div>

                <div class="col-md-4 wthree-services-left">
					<img src="images/ga3.jpg" alt="">
				</div>

                <div class="col-md-4 wthree-services-left">
					<img src="images/ga4.jpg" alt=""  style="margin-top:30px;">
				</div>
                <div class="col-md-4 wthree-services-left">
					<img src="images/ga5.jpg" alt="" style="margin-top:30px;">
				</div>
                <div class="col-md-4 wthree-services-left">
					<img src="images/ga6.jpg" alt="" style="margin-top:30px;">
				</div>
                <div class="col-md-4 wthree-services-left">
					<img src="images/ga7.jpg" alt="" style="margin-top:30px;">
				</div>
					
                
                <div class="col-md-4 wthree-services-left">
					<img src="images/5.jpg" alt="" style="margin-top:30px;">
				</div>
                
                <div class="col-md-4 wthree-services-left">
					<img src="images/5.jpg" alt="" style="margin-top:30px;">
				</div>-->
</div>
				<div class="col-md-4 wthree-services-left">
				<img src="images/w.jpeg" alt="an old car">
				</div>
				
				<div class="col-md-4 wthree-services-left">
				<img src="images/x.jpeg" alt="an old car">
				</div>
				
				<div class="col-md-4 wthree-services-left">
				<img src="images/y.jpeg" alt="an old car">
				</div>
				
				<div class="col-md-4 wthree-services-left" style="margin-top:25px;">
				<img src="images/z.jpeg" alt="an old car">
				</div>
				
				<div class="col-md-4 wthree-services-left" style="margin-top:25px;">
				<img src="images/p.jpg" alt="an old car">
				</div>
				
				<div class="col-md-4 wthree-services-left" style="margin-top:25px;">
				<img src="images/w.jpeg" alt="an old car">
				</div>
				
				<div class="col-md-4 wthree-services-left" style="margin-top:25px;">
				<img src="images/w.jpeg" alt="an old car">
				</div>

				<div class="col-md-4 wthree-services-left" style="margin-top:25px;">
				<img src="images/r.jpg" alt="an old car">
				</div>
				
				<div class="col-md-4 wthree-services-left" style="margin-top:25px;">
				<img src="images/s.jpg" alt="an old car">
				</div>
				
				
				
</div>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-top -->
	

	<!-- //about -->
	<!-- footer -->
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