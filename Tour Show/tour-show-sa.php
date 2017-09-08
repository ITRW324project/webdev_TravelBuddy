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
        <h1>Best of South Africa</h1>
        <p>When we say "Best of South Africa", we mean it. Hop on the road and tour through South Africa along the coastline via car travel. Every destination will leave you breathless as you see what the most southern tip of Africa has to offer. Not only the journey will enlighten your senses, the people, places and friendships you will meet and create is something to look forward too. All travel is done by car which can be hired from the airport as you land in this beautiful country. </p>
    	</div>
		</div>
		<!-- BANNER END -->
		<!-- GOOLE MAP -->
		<div id="left-panel">
			<div>
				<b>Choose where you want to start:</b>
				<br />
				<select id="start" name="start">
					<option value="Cape Town, ZA" name="capeTown">Cape Town</option>
					<option value="Durban, ZA" name="durban">Durban</option>
					<option value="Johannesburg, ZA" name="johannesberg">Johannesburg</option>
					<option value="Pretoria, ZA" name="pretoria">Pretoria</option>
					</select>
					<br>
				<b>Waypoints:</b> <br>
				<i>(Ctrl+Click or Cmd+Click for multiple selection)</i> <br>
				<select name="waypoints[]" multiple="multiple" id="waypoints">
					<option value="east london, ZA" name="east-london">East London</option>
					<option value="jeffreys bay, ZA" name="jeffreys-bay">Jeffreys Bay</option>
					<option value="port elizabeth, ZA" name="port-elizabeth">Port Elizabeth</option>
					<option value="kimberley, ZA" name="kimberley">Kimberley</option>
					<option value="springbok, ZA" name="springbok">Springbok</option>
					<option value="bloemfontein, ZA" name="bloemfontein">Bloemfontein</option>
					<option value="beaufort west, ZA" name="beaufort-west">Beaufort West</option>
				</select>
				</div>
		</div>

		<div id="right-panel">
			<div>
				<b>Choose your final destination:</b>
				<br />
				<select id="end" name="end">
					<option value="Durban, ZA" name="durban">Durban</option>
					<option value="Johannesberg, ZA" name="johannesberg">Johannesberg</option>
					<option value="Pretoria, ZA" name="pretoria">Pretoria</option>
					<option value="Cape Town, ZA" name="capeTown">Cape Town</option>
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
						zoom: 5,
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
								var summaryPanel = document.getElementById('summaryPanel');
								var totalDistance = document.getElementById('totalDistance');
								totDist = 0;
								var location1 = document.getElementById('start').text;
								var url = '../Show%20Destination/show-destination.html?location='+location1;

								summaryPanel.innerHTML = '';
								totalDistance.innerHTML = '';
								for (var i = 0; i < route.legs.length; i++) {
									var routeSegment = i + 1;
									summaryPanel.innerHTML += "<a class='startAddress' href='../Show%20Destination/show-destination.html?location=Cape Town'>" + route.legs[i].start_address + "</a>" + "<span class='to'>" + ' to ' + "</span>";
									summaryPanel.innerHTML += "<a class='endAddress' href='../Show%20Destination/show-destination.html?location=Durban'>" + route.legs[i].end_address + "</a>" + '</br>';
									summaryPanel.innerHTML += '<b>Distance:</b> ' + route.legs[i].distance.text + '</br>';
									summaryPanel.innerHTML += '<b>Duration:</b> ' + route.legs[i].duration.text + '</br></br>';
								}
								computeTotalDistance(response);
							} else {
								window.alert('Directions request failed due to ' + status);
							}
						});
				}

				function computeTotalDistance(result) {
					var totalDist = 0;
					var totalTime = 0;
					var myroute = result.routes[0];
					for (i = 0; i < myroute.legs.length; i++) {
						totalDist += myroute.legs[i].distance.value;
						totalTime += myroute.legs[i].duration.value;
					}
					totalDist = totalDist / 1000.
					document.getElementById("totalDistance").innerHTML = totalDist.toFixed(2) + " km<br>";
					document.getElementById("totalDuration").innerHTML = (totalTime/3600).toFixed(0) + " hrs " + ((totalTime % 3600) / 60).toFixed(0) + " mins";
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjj2DSxrDr9jArPVtf5gcguBo7m6NVAsM&callback=myMap"></script>
		</div>
		<!-- GOOGLE MAP END -->

		<!-- TOUR LIST -->
		<div id = "sa-list">
		<div class="container">
			<div id="summaryPanel"></div>

			<div class="summary">
				<h6>Best of South Africa</h6>
				<p><b>Total Distance:</b> <div id="totalDistance"></div></p>
				<p><b>Total Leg Travel Duration:</b> <div id="totalDuration"></div></p>
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

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script>
			$('start').value(function(){
				startAddress = $(this).val();
				$('.startAddress').attr('href', '../Show%20Destination/show-destination.html?location=' + startAddress);
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="../js/close_menu.js"></script>
	</body>
</html>
