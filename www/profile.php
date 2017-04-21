<?php 

include 'controller/profile_controller.php'

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">

table.activities td {
    margin: 12px 12px 12px 12px;
    padding: 12px 12px 12px 12px;
}



</style>
</head>
<body>
		<div class="header" id="ban">
			<div class="container">
				<div class="head-left"></div>
				<div class="header_right">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-7" id="link-effect-7">
							<ul class="nav navbar-nav">
								<li><a href="cart.php"><img src="images/panner.jpg" alt=""></a></li>
								<li><a href="activities.php">Activity</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li class="active act"><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html">PROFILE</a></h1>
				<p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->



	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div>
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					
					<div style="float: left; margin-right: 100px;">
						<div class="team-grid1">

							<?php 

								echo '<img src="'.$avatar.'" alt="Photo de profil" class="img-responsive" width="320" height="300">' ;
							?>


							<br>
							<button type="button" class="add_to_cart">Changer ma photo</button>
						</div>
					</div>
					
					<div class="welcome-bottom">
						<h2 class="w3">Profile</h2>
						<p><b>Surname</b> : <?php echo $surname; ?> </p>
						<p><b>Name</b> : <?php echo $name; ?> </p>
						<p><b>Speciality</b> : <?php echo $studies; ?> </p>
						<p><b>@mail</b> : <?php echo $email; ?> </p>
						<button type="button" class="add_to_cart">Modify personnal informations</button>
						<br><br><br><br><br><br>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="container">
		<div>
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					
					<div class="welcome-bottom">
						<h2 class="w3">My activities</h2>
						<br><br>

						<?php 

						echo $html_activities;

						?>

					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="container">
		<div>
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					
					<div class="welcome-bottom">
						<h2 class="w3">My orders</h2>
						<br><br>

						<?php 

						echo $html_orders;

						?>
						
						
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
		<div class="footer">
			<div class="container">

				<div class="clearfix"></div>
			</div>
		</div>
		<div class="copyright">
					<div class="container">
						<p>© 2017 BDE CESI. All rights reserved | Design by Exia CESI Orleans | <a href="legal_notices.html">Legal Notices</a></p>
					</div>
				</div>
</body>
</html>