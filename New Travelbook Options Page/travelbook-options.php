<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Travel Buddy</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body>
		<!-- NAVBAR -->
		<nav class="navbar">
				<a class="logo logo-small-light" href="../home.php">Travel Buddy</a>
				<div>
					<button class="btn btn-success btn toggle-travelbook">My Travelbook</button>
					<a class="btn btn-outline-secondary btn-sm" href="../Log Out/logout.php">Logout</a>
					<?php $cookie_name = $_COOKIE['UserName']; echo $cookie_name; ?>
				</div>
		</nav>
		<!-- NAVBAR END -->
		<!-- WELCOME BANNER -->
		<div class="welcome-banner" style="background-image: url(https://static.pexels.com/photos/41949/earth-earth-at-night-night-lights-41949.jpeg);">
				<h2>Welcome to </br><span class="logo">Travel Buddy!</span></h2>
				
		</div>
		<!-- WELCOME BANNER END -->
		<!-- PREPLANNED -->
		<div class="background-grey">
			<div class="container">
				<h5 class="container-heading">Please choose one of the following locations as your journey destination. Each location has the best and most amazing cities to choose from allowing you to emerse yourself in the proper cultural experience.</h5>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="../Tour Show/tour-show-europe.php">
							<img class="card-img-top" src="../img/London_Transport.jpg" >
							<div class="card-block">
								<h4 class="card-title"><center>Europe</center></h4>
								<!--<p class="card-text">Take a 4 week tour through Europe.  Explore all the luxuries that Europe has to offer.</p>
							--></div>
						</a>
					</div>
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="../Tour Show/tour-show-sa.php">
							<img class="card-img-top" src="../img/CapeTown_TableMountain.jpeg" >
							<div class="card-block">
								<h4 class="card-title"><center>South Africa</center></h4>
								<!--<p class="card-text">Join us for a week of wonder in South Africa's most beautiful city and surrounding nature areas in Cape Town.</p>
							--></div>
						</a>
					</div>
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="../Tour Show/tour-show-usa.php">
							<img class="card-img-top" src="../img/NewYork_Streets.jpeg" >
							<div class="card-block">
								<h4 class="card-title"><center>United States of America</center></h4>
								<!--<p class="card-text">Take a week to experience the famous rushed streets of New York City.  Including tours to Manhattan and Brooklyn.</p>
							--></div>
						</a>
					</div>
				</div>
				<!--<a class="btn btn-primary center-button btn-lg" href="../Tour Index/Tour-Index.php">View All</a>-->
			</div>
		</div>
		<!-- PREPLANNED END -->
		<!-- SIDEBAR -->
		<div class="sidebar">
			<a class="logo logo-small-dark">Travel Buddy</a>
			<button type="button" class="close toggle-travelbook" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h3>My Travelbook</h3>
			<div class="card">
				<h6 class="sidebar-heading">Chosen Destinations</h6>
				<div class="list-group">
					<a href="#" class="list-group-item home">
			    HOME
			  </a>
			  <div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 16 723.6km</p>
					<p><b>Leg Travel Duration:</b> 21 Hrs 14 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.php?location=California" class="list-group-item active">
			    California
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 4 747.8km</p>
					<p><b>Leg Travel Duration:</b> 4 Hrs 41 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.php?location=Miami" class="list-group-item active">
			    Miami
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 2 053,1km</p>
					<p><b>Leg Travel Duration:</b> 3Hrs 5 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.php?location=NewYork" class="list-group-item active">
			    New York
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 12 831km</p>
					<p><b>Leg Travel Duration:</b> 14 Hrs 50 Mins</p>
				</div>
				<a href="#" class="list-group-item home">
			    HOME
			  </a>
					<a class="btn btn-primary btn-lg" href="../Journal Destinations/journal_destinations.php">View Map</a>
				</div>
			</div>
		</div>
		<!-- SIDEBAR END -->
		<!-- FOOTER -->
		<nav class="navbar footer">
				<p class="logo logo-small-light">Travel Buddy</p>
				<div>
					<p>Follow us on</p>
					<a class="btn btn-outline-secondary btn-sm" href="http://www.twitter.com">Twitter</a>
					<a class="btn btn-outline-secondary btn-sm" href="http://www.facebook.com">Facebook</a>
					<a class="btn btn-outline-secondary btn-sm" href="http://www.instagram.com">Instagram</a>
				</div>
		</nav>
		<!-- FOOTER END -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="../js/close_menu.js"></script>
	</body>
</html>