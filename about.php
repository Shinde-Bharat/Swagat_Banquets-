<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

.gallery {
  --g: 8px;   /* the gap */
  --s: 400px; /* the size */
  
  display: grid;
  border-radius: 50%;
}
.gallery > img {
  grid-area: 1/1;
  width: 400px;
  aspect-ratio: 1;
  object-fit: cover;
  border-radius: 50%;
  transform: translate(var(--_x,0),var(--_y,0));
  cursor: pointer;
  z-index: 0;
  transition: .3s, z-index 0s .3s;
}
.gallery img:hover {
  --_i: 1;
  z-index: 1;
  transition: transform .2s, clip-path .3s .2s, z-index 0s;
}
.gallery:hover img {
  transform: translate(0,0);
}
.gallery > img:nth-child(1) {
  clip-path: polygon(50% 50%,calc(50%*var(--_i,0)) calc(120%*var(--_i,0)),0 calc(100%*var(--_i,0)),0 0,100% 0,100% calc(100%*var(--_i,0)),calc(100% - 50%*var(--_i,0)) calc(120%*var(--_i,0)));
  --_y: calc(-1*var(--g))
}
.gallery > img:nth-child(2) {
  clip-path: polygon(50% 50%,calc(100% - 120%*var(--_i,0)) calc(50%*var(--_i,0)),calc(100% - 100%*var(--_i,0)) 0,100% 0,100% 100%,calc(100% - 100%*var(--_i,0)) 100%,calc(100% - 120%*var(--_i,0)) calc(100% - 50%*var(--_i,0)));
  --_x: var(--g)
}
.gallery > img:nth-child(3) {
  clip-path: polygon(50% 50%,calc(100% - 50%*var(--_i,0)) calc(100% - 120%*var(--_i,0)),100% calc(100% - 120%*var(--_i,0)),100% 100%,0 100%,0 calc(100% - 100%*var(--_i,0)),calc(50%*var(--_i,0)) calc(100% - 120%*var(--_i,0)));
  --_y: var(--g)
}
.gallery > img:nth-child(4) {
  clip-path: polygon(50% 50%,calc(120%*var(--_i,0)) calc(50%*var(--_i,0)),calc(100%*var(--_i,0)) 0,0 0,0 100%,calc(100%*var(--_i,0)) 100%,calc(120%*var(--_i,0)) calc(100% - 50%*var(--_i,0)));
  --_x: calc(-1*var(--g))
}

inner{
  margin: 0;
  min-height: 100vh;
  display: grid;
  place-content: left;
  }
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
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
		<?php include_once('includes/header.php');?>
			<div class="wthree-heading">
				<h2>About Us</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<!-- about-top -->
	<div class="about-top">
		<div class="container">
			<div class="wthree-services-bottom-grids">
				<div class="col-md-6 wthree-services-left">
					<div class="inner">
				<div class="gallery">
				<img src="images/p.jpg" alt="">
				<img src="images/q.jpg" alt="">
				<img src="images/r.jpg" alt="">
				<img src="images/s.jpg" alt="">
				</div>
</div>
				</div>
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						<h4><?php  echo htmlentities($row->PageTitle);?></h4>
						<p><?php  echo $row->PageDescription;?></p><?php $cnt=$cnt+1;}} ?>
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
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/modernizr.custom.js"></script>

</body>	
</html>