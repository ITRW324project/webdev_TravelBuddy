<!DOCTYPE html>
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
				<a class="logo logo-small-light" href="../Landing Page/landing-page.php">Travel Buddy</a>
				<div>
					<button class="btn btn-success btn toggle-travelbook">My Travelbook</button>
					<a class="btn btn-outline-secondary btn-sm" href="../Log Out/logout.php">Logout</a>
					<?php $cookie_name = $_COOKIE['UserName']; echo $cookie_name; ?>
				</div>
		</nav>
		<!-- NAVBAR END -->
		<!-- BANNER -->
		<div class="gradient-banner" >
        <h1>Travel Journal</h1>
        <p>You have selected the following destinations</p>
    	</div>
		</div>
		<!-- BANNER END -->
		<!-- GOOLE MAP -->
		<div id = "googleMap">
			<script>
				function myMap() {
					var mapProp= {
						center:new google.maps.LatLng(37.09024, -95.712891),
						zoom:2,
					};
					var california = new google.maps.LatLng(36.778261, -119.4179324);
					var miami = new google.maps.LatLng(25.7616798, -80.1917902);
					var newyork = new google.maps.LatLng(40.6781784, -73.9441579);
					var ortambo = new google.maps.LatLng(-26.1366728, 28.2411459);

					var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
					var marker1 = new google.maps.Marker({position: california});
					var marker2 = new google.maps.Marker({position: ortambo});
					var marker3 = new google.maps.Marker({position: miami});
					var marker4 = new google.maps.Marker({position: newyork});
					marker1.setMap(map);
					marker2.setMap(map);
					marker3.setMap(map);
					marker4.setMap(map);

					var flightPath = new google.maps.Polyline({
					path: [ortambo, california,  miami, newyork],
					strokeColor: "#0000FF",
					strokeOpacity: 0.8,
					strokeWeight: 2
					});
					flightPath.setMap(map);
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjj2DSxrDr9jArPVtf5gcguBo7m6NVAsM&callback=myMap"></script>
		</div>
		<!-- GOOGLE MAP END -->
		<!-- TOUR LIST -->
		<div class="container">
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
			</div>
			<div class="summary">
				<h6>Luxury Europe Tour Summary</h6>
				<p><b>Total Distance:</b> 28 320.7km</p>
				<p><b>Total Leg Travel Duration:</b> 32 Hrs 5 Mins</p>
				<a class="btn btn-primary btn mt-1" href="../Landing Page/landing-page.php">Add more destinations</a>
			</div>
		</div>
		<!-- TOUR LIST END -->
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