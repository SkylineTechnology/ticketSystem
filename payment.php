<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

if(!$_SESSION){
	header('location:login.php');
}
$uid = $_SESSION["userid"];
$row = mysqli_fetch_array(mysqli_query($conn, "select * from registration where email='$uid'"));
$fullname = $row['fullname'];

$accountnumber = generateAccount();
$ammount = $_SESSION['ticket_price'];

$ticket_num = $_SESSION['ticket_num'];
$evt_id = $_SESSION['event_id'];
$home = $_SESSION['home'];
$away = $_SESSION['away'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];



if (isset($_POST['ticket'])) {
    $amount = $_POST['amount'];
    //$dp_id = $_GET['del'];
    $insert_ticket = mysqli_query($conn, "insert into tickets value('$ticket_num','','$evt_id','$uid','$date','$time','$amount','valid')");
    if ($insert_ticket ) {
        
        echo "<script>alert('Your ticket is registered successfully. Please enjoy the game!'); window.location.href='view_ticket.php';</script>";
    } else {
        echo "<script>alert('Error occur. Please try again later!'); window.location.href='index.php';</script>";
    }
}


?>


<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitename; ?>Payment</title>
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
<style type="text/css">
.payment{
    margin:0 auto;
}
</style>
</head>
	
<body>
<!-- header -->
	<?php
      include 'includes/header.php';
    ?>
<!-- //header -->
<!-- navigation -->	
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Payment</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- payment -->
    <div class="payment-container">
        <div class="payment">
            <h3>Transfer NGN <?php echo $ammount; ?> to Ticket Procurement System</h3>
            <div class="bank_details">
                <form action="" method="post">
                    <label for="">BANK NAME</label><br>
                    <input type="text" value="Paystack-Titan"><div class="copy"></div><br>
                    <label for="">ACCOUNT NUMBER</label><br>
                    <input type="text" value="<?php echo $accountnumber; ?>"><div class="copy"></div><br>
                    <label for="">AMOUNT</label><br>
                    <input type="text" name="amount" value="NGN <?php echo $ammount; ?>"><div class="copy"></div>

                    <p>Search for paystack-Titan on your bank-app.<br>
                    Use this account for this<br>
                    transaction only.
                    </p>

                    <button name="ticket">I've sent the money</a></button>
                </form>
            </div>
       

            <h5>Secure by paystack</h5>
        </div>

    </div>

<!-- payment -->

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