<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

if(!$_SESSION){
	header('location:login.php');
}

$uid = $_SESSION["userid"];

$row = mysqli_fetch_array(mysqli_query($conn, "select * from registration where email='$uid'"));
    $fname = $row['fullname'];
    $gend = $row['gender'];
    $phon = $row['phone'];
    $mail = $row['email'];
    $addrs = $row['address'];
    $nins = $row['nin'];

if (isset($_POST["update"])) {
    $fullname = $_POST["fullname"];
    $addr = $_POST["addr"];
    $phone = $_POST["phone"];
    $nin = $_POST["nin"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    
    $update = mysqli_query($conn, "update registration set fullname='$fullname', email='$email', phone='$phone', gender='$gender', nin='$nin', address='$addr' where email='$uid'");

    if($update){
        echo "<script>alert('Profile Update was Successfull'); window.location.href='profile.php';</script>";
    }else{
        echo "<script>alert('Profile Update Failed, Please Try after some minutes.'); </script>"; 
    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitename; ?> Profile</title>
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
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Profile</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>My Profile</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="" method="post">
					<label for="">Fullname: </label><input type="text" name="fullname" value="<?php echo $fname; ?>" placeholder="Fullname..." required=" " ><br>
                    <label for="">Email: </label><input type="email" name="email" value="<?php echo $mail; ?>" placeholder="Email Address" required=" " readonly=""><br>
                    <label for="">Phone: </label><input type="text" name="phone" value="<?php echo $phon; ?>" placeholder="Phone..." required=" " ><br>
                    <label for="">NIN: </label><input type="text" name="nin" value="<?php echo $nins ?>" placeholder="NIN" required=" " readonly=""><br>
                    <label for="">Gender: </label><select name="gender" required="">
                            <option value="<?php echo $gend; ?>"><?php echo $gend ?></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                    </select><br>
					<label for="">Address: </label><textarea name="addr"><?php echo $addrs ?></textarea>
					<input type="submit" name="update" value="Update Profile">
				</form>
			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
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