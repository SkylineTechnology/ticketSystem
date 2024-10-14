<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="register.php"> Create Account </a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="contact.html">Help</a></li>
					
				</ul>
			</div>
			<div class="product_list_header" style="margin-top: 10px;">  
				<a href="logout.php" style="color:red; margin-top: 15px;">Logout</a>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
			
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Ticket Procurement System</a></h1>
			</div>
		
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li><a href="profile.php">Profile</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Games<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Available Games</h6>
														<?php
															$res = mysqli_query($conn, "select * from games");
															$a = 1;
															while ($row1 = mysqli_fetch_array($res)) {
																$games_id = $row1["game_id"];
																$games_name = $row1["game_name"];
																
																?> 
														<li><?php echo $games_name; ?></li>
														<?php
														}
														?>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									
									
									<li><a href="myticket.php">Ticket History</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
