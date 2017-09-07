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
        <h1>Best of South Africa</h1>
        <p>When we say "Best of South Africa", we mean it. Hop on the road and tour through South Africa along the coastline via car travel. Every destination will leave you breathless as you see what the most southern tip of Africa has to offer. Not only the journey will enlighten your senses, the people, places and friendships you will meet and create is something to look forward too. All travel is done by car which can be hired from the airport as you land in this beautiful country.</p>
    	</div>
		</div>
		<!-- BANNER END -->
		<!-- GOOLE MAP -->
		<div id = "googleMap"></div>
			<script>
				var geocoder;
				var map;
				var directionsDisplay;
				var directionsService = new google.maps.DirectionsService();
				var locations = [
					['Cape Town', -33.9249, 18.4241, 1],
					['Stellenbosch', -33.9321, 18.8602, 2],
					['Port Elizabeth', -33.7139, 25.5207, 3],
					['Durban', -29.8587, 31.0218, 4],
					['Pietermaritzberg', -29.6006, 30.3794],
					['Pretoria',-25.7479, 28.2293, 6],
					['Johannesberg', -26.2041, 28.0473, 7],
					['Kimberley', -28.7282, 24.7499, 8],
					['Bloemfontein', -29.0852, 26.1596, 9]
				];

				function initialize() {
					directionsDisplay = new google.maps.DirectionsRenderer();

					var map = new google.maps.Map(document.getElementById('googleMap'), {
						zoom: 5,
						center: new google.maps.LatLng(-29, 23.5),
						mapTypeId: google.maps.MapTypeId.ROADMAP
					});
					directionsDisplay.setMap(map);
					var infowindow = new google.maps.InfoWindow();

					var marker, i;
					var request = {
						travelMode: google.maps.TravelMode.DRIVING
					};
					for (i = 0; i < locations.length; i++) {
						marker = new google.maps.Marker({
							position: new google.maps.LatLng(locations[i][1], locations[i][2]),
							map: map
						});

						google.maps.event.addListener(marker, 'click', (function(marker, i) {
							return function() {
								infowindow.setContent(locations[i][0]);
								infowindow.open(map, marker);
							}
						})(marker, i));
						if (i == 0) request.origin = marker.getPosition();
						else if (i == locations.length - 1) request.destination = marker.getPosition();
						else {
							if (!request.waypoints) request.waypoints = [];
							request.waypoints.push({
								location: marker.getPosition(),
								stopover: true
							});
						}

					}
					directionsService.route(request, function(result, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							directionsDisplay.setDirections(result);
						}
					});
				}
				google.maps.event.addDomListener(window, "load", initialize);
			
					/*var capetown = new google.maps.LatLng(-33.9249, 18.4241);
					var stellenbosch = new google.maps.LatLng(-33.9321, 18.8602);
					var portelizabeth = new google.maps.LatLng(-33.7139, 25.5207);
					var durban = new google.maps.LatLng(-29.8587,31.0218);
					var pietermaritzberg = new google.maps.LatLng(-29.6006 , 30.3794);
					var pretoria = new google.maps.LatLng(-25.7479 , 28.2293);
					var johannesberg = new google.maps.LatLng(-26.2041 , 28.0473);
					var bloemfontein = new google.maps.LatLng(-29.0852 , 26.1596);
					var kimberley = new google.maps.LatLng(-28.7282 , 24.7499);
					var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
					var marker1 = new google.maps.Marker({position: durban});
					var marker2 = new google.maps.Marker({position: pietermaritzberg});
					var marker3 = new google.maps.Marker({position: portelizabeth});
					var marker4 = new google.maps.Marker({position: stellenbosch});
					var marker5 = new google.maps.Marker({position: capetown});
					var marker6 = new google.maps.Marker({position: pretoria});
					var marker7 = new google.maps.Marker({position: johannesberg});
					var marker8 = new google.maps.Marker({position: bloemfontein});
					var marker9 = new google.maps.Marker({position: kimberley});
					marker1.setMap(map);
					marker2.setMap(map);
					marker3.setMap(map);
					marker4.setMap(map);
					marker5.setMap(map);
					marker6.setMap(map);
					marker7.setMap(map);
					marker8.setMap(map);
					marker9.setMap(map);
					directionsDisplay.setMap(map);*/
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjj2DSxrDr9jArPVtf5gcguBo7m6NVAsM&callback=initialize"></script>
		<!-- GOOGLE MAP END -->
		<!-- TOUR LIST -->
		<div class="container">
			<div class="sa-list">
			  <a href="#" class="list-group-item home">
			    HOME
			  </a>
			  <div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 13 276.6km</p>
					<p><b>Leg Travel Duration:</b> 11 Hrs 15 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.html?location=London" class="list-group-item active">
			    London
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 470.8km</p>
					<p><b>Leg Travel Duration:</b> 2 Hrs 25 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.html?location=Paris" class="list-group-item active">
			    Paris
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 1 420.3km</p>
					<p><b>Leg Travel Duration:</b> 2 Hrs 15 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.html?location=Rome" class="list-group-item active">
			    Rome
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 1 359.4km</p>
					<p><b>Leg Travel Duration:</b> 1 Hrs 55 Mins</p>
				</div>
			    <a href="../Show%20Destination/show-destination.html?location=Barcelona" class="list-group-item active">
			    Barcelona
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 11 793.6km</p>
					<p><b>Leg Travel Duration:</b> 14 Hrs 15 Mins</p>
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
						<p><b>Distance:</b> 13 276.6km</p>
						<p><b>Leg Travel Duration:</b> 11 Hrs 15 Mins</p>
					</div>
					<a href="#" class="list-group-item active">
						London
						<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
					</a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b> 470.8km</p>
						<p><b>Leg Travel Duration:</b> 2 Hrs 25 Mins</p>
					</div>
					<a href="#" class="list-group-item active">
						Paris
						<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
					</a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b> 1 420.3km</p>
						<p><b>Leg Travel Duration:</b> 2 Hrs 15 Mins</p>
					</div>
					<a href="#" class="list-group-item active">
						Rome
						<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
					</a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b>  1 359.4km</p>
						<p><b>Leg Travel Duration:</b> 1 Hrs 55 Mins</p>
					</div>
					<a href="../Destination Show/destination-show.php" class="list-group-item active">
			    		Barcelona
						<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			 	    </a>
					<div href="#" class="list-group-item list-group-item-action">
						<p><b>Distance:</b> 11 793.6km</p>
						<p><b>Leg Travel Duration:</b> 14 Hrs 15 Mins</p>
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
