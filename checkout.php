<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

if(!$_SESSION){
	header('location:login.php');
}

$e_id = $_GET["evt_id"];

$row1 = mysqli_fetch_array(mysqli_query($conn, "select * from events where event_id='$e_id'"));
$evt_id = $row1['event_id'];
$games = $row1["games"];
$home = $row1["home_team"];
$away = $row1["away_team"];
$date1 = $row1["date"];
$time = $row1["time"];
$ticket = $row1["ticket_price"];

$ticket_num = generateRandomString();
//$seat_num = generateSeatNumber();
$_SESSION['ticket_num'] = $ticket_num;
$_SESSION['event_id'] = $evt_id;
$_SESSION['game'] = $games;
$_SESSION['home'] = $home;
$_SESSION['away'] = $away;
$_SESSION['date'] = $date1;
$_SESSION['time'] = $time;
$_SESSION['ticket_price'] = $ticket;


?>



<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitename; ?> Checkout Page</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
<?php
	include 'includes/header.php';
?>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Ticket Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			
			
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>Ticket Detials</h4>
					<ul>
						<li>Ticket Number: <i>-</i> <span><?php echo $ticket_num; ?> </span></li>
						
						<li>Match: <i>-</i> <span><?php echo $home; ?> VS <?php echo $away; ?></span></li>
						<li>Date: <i>-</i> <span><?php echo $date1; ?></span></li>
						<li>Time: <i>-</i> <span><?php echo $time; ?></span></li>
						<li>Price: <i>-</i> <span><?php echo $ticket; ?></span></li>
					</ul>

					<div class="checkout-right-basket">
					<a href="payment.php"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Payment</a>
				</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout -->
<!-- //footer -->
<?php
	include 'includes/footer.php';
?>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
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
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>