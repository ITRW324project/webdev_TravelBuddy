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
        <h1>United States of America</h1>
        <!--<p>Take a 4 week tour through Europe.  Explore all the luxuries that Europe has to offer.  The tour will depart from London.  This tour will provide you with all the exlusive attractions that Europe has to offer.  All travels will be done per flight, except for the departure from London to France; you will travel by train.  Information regarding the distance traveled and time traveled will be displayed below.</p>
    	--></div>
		</div>
		<!-- BANNER END -->
		<!-- GOOLE MAP -->
		<div id="left-panel">
			<div>
				<b>Choose where you want to start:</b>
				<br />
				<select id="start">
					<option value="New York, NY" name="New York">New York</option>
					<option value="Chicago, IL" name="Chicago">Chicago</option>
					<option value="Las Vegas, NV" name="Las Vegas">Las Vegas</option>
					<option value="Seattle, WA" name="Seattle">Seattle</option>
					<option value="San Francisco, CA" name="San Francisco">San Francisco</option>
					<option value="Washington, DC" name="Washington">Washington</option>
					<option value="New Orleans, LA" name="New Orleans">New Orleans </option>
					<option value="San Diego, CA" name="San Diego">San Diego</option>
					<option value="Miami, FL" name="Miami">Miami</option>
					<option value="Boston, MA" name="Boston">Boston</option>
					<option value="Orlando, FL" name="Orlando">Orlando</option>
					<option value="Nashville, TN" name="Nashville">Nashville</option>	
					<option value="Los Angeles, CA" name="Los Angeles">Los Angeles</option>	
					<option value="Austin, TX" name="Austin">Austin</option>
					</select>
					<br>
				<b>Waypoints:</b> <br>
				<i>(Ctrl+Click or Cmd+Click for multiple selection)</i> <br>
				<select multiple id="waypoints">
					<option value="New York, NY" name="New York">New York</option>
					<option value="Chicago, IL" name="Chicago">Chicago</option>
					<option value="Las Vegas, NV" name="Las Vegas">Las Vegas</option>
					<option value="Seattle, WA" name="Seattle">Seattle</option>
					<option value="San Francisco, CA" name="San Francisco">San Francisco</option>
					<option value="Washington, DC" name="Washington">Washington</option>
					<option value="New Orleans, LA" name="New Orleans">New Orleans </option>
					<option value="San Diego, CA" name="San Diego">San Diego</option>
					<option value="Miami, FL" name="Miami">Miami</option>
					<option value="Boston, MA" name="Boston">Boston</option>
					<option value="Orlando, FL" name="Orlando">Orlando</option>
					<option value="Nashville, TN" name="Nashville">Nashville</option>	
					<option value="Los Angeles, CA" name="Los Angeles">Los Angeles</option>	
					<option value="Austin, TX" name="Austin">Austin</option>					
				</select>
				</div>
		</div>
		<div id="right-panel">
			<div>
				<b>Choose your final destination:</b>
				<br />
				<select id="end">
					<option value="New York, NY" name="New York">New York</option>
					<option value="Chicago, IL" name="Chicago">Chicago</option>
					<option value="Las Vegas, NV" name="Las Vegas">Las Vegas</option>
					<option value="Seattle, WA" name="Seattle">Seattle</option>
					<option value="San Francisco, CA" name="San Francisco">San Francisco</option>
					<option value="Washington, DC" name="Washington">Washington</option>
					<option value="New Orleans, LA" name="New Orleans">New Orleans </option>
					<option value="San Diego, CA" name="San Diego">San Diego</option>
					<option value="Miami, FL" name="Miami">Miami</option>
					<option value="Boston, MA" name="Boston">Boston</option>
					<option value="Orlando, FL" name="Orlando">Orlando</option>
					<option value="Nashville, TN" name="Nashville">Nashville</option>	
					<option value="Los Angeles, CA" name="Los Angeles">Los Angeles</option>	
					<option value="Austin, TX" name="Austin">Austin</option>
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
						center: {lat: 39.8283, lng: -98.5795}
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
				<h6>United States of America</h6>
				<p><b>Total Distance:</b> <p id="totalDistance"></p></p>
				<p><b>Total Leg Travel Duration:</b> <p id="totalDuration"></p></p>
				<br />
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Create new Travelbook</button>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Update Travelbook</button>

				<div class="modal fade" id="myModal1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title">Please provide a name for the new Travelbook</h6>
							</div>
							<div class="modal-body">
							<form action="" method="post" id="new-travelbook-entry">
								<input type="text" class="form-control" id="-new-travelbook-name">
							</form>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-submit" data-dismiss="modal">Save</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
      
					</div>
				</div>
				
				<div class="modal fade" id="myModal2" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title">Are you sure you want to update your travelbook?</h6>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-submit" data-dismiss="modal">Yes</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
							</div>
						</div>
      
					</div>
				</div>
				
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
