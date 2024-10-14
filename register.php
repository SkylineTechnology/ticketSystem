<?php
include 'includes/connection.php';


if (isset($_POST["reg"])) {
    $fullname = $_POST["fullname"];
    $addr = $_POST["addr"];
    $phone = $_POST["phone"];
    $nin = $_POST["nin"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $reg_date = date("Y-m-d H:i:s");


    //$user_code = uniqueCode($conn);

    

    $email_chk = mysqli_query($conn, "select email from registration where email='$email'");
    $email_avail = mysqli_num_rows($email_chk);

    if ($email_avail > 0) {
        $alert = 'This email has already been registered, Please use another email!';
    } else {
        if($pass == $cpass){

        $reg_member = mysqli_query($conn, "insert into registration values ('$fullname','$gender','$email','$phone','$addr','$nin','$reg_date')");
        if ($reg_member) {
            $insert_login = mysqli_query($conn, "insert into login values ('$email','$pass','user','no')");
            if ($insert_login) {
               echo "<script>alert('Registration Successfull'); window.location.href='login.php';</script>";
              //  header('location:login');
            } else {
                echo "<script>alert('Oops looks like we are having a downtime, please try after some munites');</script>";
               
            }
        } else {
            echo "<script>alert('Registration Failed, Please Try after some minutes.'); </script>"; 
          
        }
    }else{
        echo "<script>alert('Password does not Tally with Confirm Password. Please check and try again...'); </script>"; 
    }
    
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitename; ?> Create Account</title>
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
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="" method="post">
					<input type="text" name="fullname" placeholder="Fullname..." required=" " >
					<input type="text" name="addr" placeholder="Address..." required=" " >
                    <input type="text" name="phone" placeholder="Phone..." required=" " ><br>
                    <input type="text" name="nin" placeholder="NIN" required=" " ><br>
                    <select name="gender" required="">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                    </select>
                    		
				  <h6>Login information</h6>
					
					<input type="email" name="email" placeholder="Email Address" required=" " >
					<input type="password" name="pass" placeholder="Password" required=" " >
					<input type="password" name="cpass" placeholder="Password Confirmation" required=" " >
					
					<input type="submit" name="reg" value="Register">
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