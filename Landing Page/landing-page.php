<!DOCTYPE php>
<?php 
 $cookie_name = $_COOKIE['UserName'];
 echo $cookie_name 
?>
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
				<a class="logo logo-small-light" href="../home.html">Travel Buddy</a>
				<div>
					<button class="btn btn-success btn toggle-travelbook">My Travelbook</button>
					<a class="btn btn-outline-secondary btn-sm" href="../home.html">Logout</a>
				</div>
		</nav>
		<!-- NAVBAR END -->
		<!-- WELCOME BANNER -->
		<div class="welcome-banner" style="background-image: url(https://static.pexels.com/photos/41949/earth-earth-at-night-night-lights-41949.jpeg);">
				<h2>Welcome to </br><span class="logo">Travel Buddy!</span></h2>
				<h4>Enter your dream destination</h4>
				<div class="form-group row">
		    <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="I want to visit...">
		    </div>
				<a class="btn btn-primary btn-lg" href="../Search Results/search-results.html">Let's go!</a>
		</div>
		<!-- WELCOME BANNER END -->
		<!-- PREVIOUS SEARCH -->
		<div class="container">
		  <h3 class="container-heading">You previously looked at</h3>
		  <div class="row">
		    <div class="col-12 col-md-6 col-lg-3">
		      <a class="card card-inverse card-link" href="../Destination Show/destination-show.html">
				      <img class="card-img" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" alt="Card image">
				      <div class="card-img-overlay">
				        <h4 class="card-title">Card title</h4>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				      </div>
				    </a>
					</div>
		    <div class="col-12 col-md-6 col-lg-3">
					<a class="card card-inverse card-link" href="../Destination Show/destination-show.html">
				      <img class="card-img" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" alt="Card image">
				      <div class="card-img-overlay">
				        <h4 class="card-title">Card title</h4>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				      </div>
				    </a>
					</div>

		    <div class="col-12 col-md-6 col-lg-3">
					<a class="card card-inverse card-link" href="../Destination Show/destination-show.html">
				      <img class="card-img" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" alt="Card image">
				      <div class="card-img-overlay">
				        <h4 class="card-title">Card title</h4>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				      </div>
				    </a>
					</div>
		    <div class="col-12 col-md-6 col-lg-3">
						<a class="card card-inverse card-link" href="../Destination Show/destination-show.html">
				      <img class="card-img" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" alt="Card image">
				      <div class="card-img-overlay">
				        <h4 class="card-title">Card title</h4>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				      </div>
						</a>
		    </div>
				</div>
		</div>
		<!-- PREVIOUS SEARCH END -->
		<!-- PREPLANNED -->
		<div class="background-grey">
			<div class="container">
				<h3 class="container-heading">View and use preplanned tours</h3>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="../Tour Show/tour-show.html">
							<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
							<div class="card-block">
								<h4 class="card-title">Card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="../Tour Show/tour-show.html">
							<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
							<div class="card-block">
								<h4 class="card-title">Card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="../Tour Show/tour-show.html">
							<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
							<div class="card-block">
								<h4 class="card-title">Card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- PREPLANNED END -->
		<!-- TOP DESTINATION -->
		<div class="container">
			<h3 class="container-heading">Top Destinations</h3>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<a class="card card-link" href="../Destination Show/destination-show.html">
						<img class="card-img-top card-img-round" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
						<div class="card-block">
							<h4 class="card-title">Card title</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<a class="card card-link" href="../Destination Show/destination-show.html">
						<img class="card-img-top card-img-round" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
						<div class="card-block">
							<h4 class="card-title">Card title</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<a class="card card-link" href="../Destination Show/destination-show.html">
						<img class="card-img-top card-img-round" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
						<div class="card-block">
							<h4 class="card-title">Card title</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- TOP DESTINATION END -->
		<!-- SIDEBAR -->
		<div class="sidebar">
			<a class="logo logo-small-dark">Travel Buddy</a>
			<button type="button" class="close toggle-travelbook" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h3>My Travelbook</h3>
			<div class="card">
				<h6 class="sidebar-heading">Luxury Europe Tour</h6>
				<div class="list-group">
					<a href="#" class="list-group-item home">
						HOME
					</a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b> 1021k</p>
						<p><b>Leg Travel Duration:</b> 5 Hrs 45 Mins</p>
					</div>
					<a href="#" class="list-group-item active">
						London
						<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
					</a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b> 1021k</p>
						<p><b>Leg Travel Duration:</b> 5 Hrs 45 Mins</p>
					</div>
					<a href="#" class="list-group-item active">
						Paris
						<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
					</a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b> 1021k</p>
						<p><b>Leg Travel Duration:</b> 5 Hrs 45 Mins</p>
					</div>
					<a href="#" class="list-group-item active">
						Rome
						<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
					</a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b> 1021k</p>
						<p><b>Leg Travel Duration:</b> 5 Hrs 45 Mins</p>
					</div>
					<a href="#" class="list-group-item home">
						HOME
					</a>
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
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
