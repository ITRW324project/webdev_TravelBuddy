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
					<a class="btn btn-outline-secondary btn-sm" href="../home.php">Logout</a>
				</div>
		</nav>
		<!-- NAVBAR END -->
		<!-- BANNER -->
		<div class="gradient-banner" >
        <h1>Luxury Europe Tour</h1>
        <p>Take a 4 week tour through Europe.  Explore all the luxuries that Europe has to offer.  The tour will depart from London.  This tour will provide you with all the exlusive attractions that Europe has to offer.  All travels will be done per flight, except for the departure from London to France; you will travel by train.  Information regarding the distance traveled and time traveled will be displayed below.</p>
    	</div>
		</div>
		<!-- BANNER END -->
		<!-- GOOLE MAP -->
		<div id="left-panel">
			<div>
				<b>Choose where you want to start:</b>
				<br />
				<select id="start">
					<option value="London, GBR" name="london">London</option>
					<option value="Los Angeles, CA" name="los angeles">Los Angeles</option>
					<option value="Seattle, WA" name="seattle">Seattle</option>
					<option value="Paris, FRA" name="paris">Paris</option>
					<option value="Venice, ITA" name="venice">Venice</option>
					<option value="Berlin, DEU" name="berlin">Berlin</option>
					<option value="Dublin, IRL" name="dublin">Dublin</option>
					<option value="Stockholm, SWE" name="stockholm">Stockholm</option>
					
					</select>
					<br>
				<b>Waypoints:</b> <br>
				<i>(Ctrl+Click or Cmd+Click for multiple selection)</i> <br>
				<select multiple id="waypoints">
					<option value="Sacramento, CA" name="Sacramento">Sacramento</option>
					<option value="Liverpool, GBR" name="Liverpool">Liverpool</option>
					<option value="Manchester, GBR" name="Manchester">Manchester</option>
					<option value="Bristol, GBR" name="Bristol">Bristol</option>
					<option value="Rome, ITA" name="Rome">Rome</option>
					<option value="Florence, ITA" name="Florence">Florence</option>
					<option value="Milan, ITA" name="beaufort-west">Milan</option>
					<option value="Lyon, FRA" name="Lyon">Lyon</option>
					<option value="Hamburg, DEU" name="Hamburg">Hamburg</option>
					<option value="Cork, IRL" name="Cork">Cork</option>
					<option value="Uppsala, SWE" name="Uppsala">Uppsala</option>					
				</select>
				</div>
		</div>
		<div id="right-panel">
			<div>
				<b>Choose your final destination:</b>
				<br />
				<select id="end">
					<option value="London, GBR" name="london">London</option>
					<option value="Los Angeles, CA" name="los angeles">Los Angeles</option>
					<option value="Seattle, WA" name="seattle">Seattle</option>
					<option value="Paris, FRA" name="paris">Paris</option>
					<option value="Venice, ITA" name="venice">Venice</option>
					<option value="Berlin, DEU" name="berlin">Berlin</option>
					<option value="Dublin, IRL" name="dublin">Dublin</option>
					<option value="Stockholm, SWE" name="stockholm">Stockholm</option>
				</select>
				<br>
				<input type="submit" id="submit">
			</div>
			
		</div>
		<div id = "googleMap">
<script>
				function myMap() {
					var directionsService = new google.maps.DirectionsService;
					var directionsDisplay = new google.maps.DirectionsRenderer;
					var map = new google.maps.Map(document.getElementById('googleMap'), {
						zoom: 4,
						center: {lat: -29, lng: 23.5}
					});
					directionsDisplay.setMap(map);
					
					document.getElementById('submit').addEventListener('click', function() {
						calculateAndDisplayRoute(directionsService, directionsDisplay);
						changeValues();
					});
				}
				
				function changeValues() {
					document.getElementById('home_name').value = document.getElementById('start').value;
				}
				
				function calculateAndDisplayRoute(directionsService, directionsDisplay) {
					var waypts = [];
					var checkboxArray = document.getElementById('waypoints');
					for (var i = 0; i < checkboxArray.length; i++) {
						if (checkboxArray.options[i].selected) {
							waypts.push({
								location: checkboxArray[i].value,
								stopover: true
							});
						}
					}
					
					directionsService.route({
						origin: document.getElementById('start').value,
						destination: document.getElementById('end').value,
						waypoints: waypts,
						optimizeWaypoints: true,
						travelMode: 'DRIVING'
					}, function(response, status) {
							if (status === 'OK') {
								directionsDisplay.setDirections(response);
								var route = response.routes[0];
								var homePanelPlace = document.getElementById('home-panel-place');
								var homePanelDistance = document.getElementById('home-panel-distance');
								var homePanelDuration = document.getElementById('home-panel-duration');
								var dest1PanelDistance = document.getElementById('dest1-panel-distance');
								summaryPanel.innerHTML = '';
								for (var i = 0; i < route.legs.length; i++) {
									var routeSegment = i + 1;
									summaryPanel.innerHTML += route.legs[i].start_address;
									homePanelDistance.innerHTML = '<b>Distance: </b>' + route.legs[i].distance.text;
									homePanelDuration.innerHTML = '<b>Duration: </b>' + route.legs[i].duration.text;
								}
							} else {
								window.alert('Directions request failed due to ' + status);
							}
						});
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjj2DSxrDr9jArPVtf5gcguBo7m6NVAsM&callback=myMap"></script>
		</div>
		<!-- GOOGLE MAP END -->
		<!-- TOUR LIST -->
		<div id = "eu-list">
		<div class="container">
			<div class="list-group">
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
