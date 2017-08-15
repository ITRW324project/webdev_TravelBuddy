<!DOCTYPE html>
<?php 
 $cookie_name = $_COOKIE['UserName'];
 echo $cookie_name 
?>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Travel App</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	</head>
	
<body>		
<div class = "header">
	<div class = "container">
		<div class = "logo">
			<h2>Travel App</h2>
		</div>
		<nav>
			<ul class="nav">
				<li class="sign-up"><a href="registration.html">Sign Up</a></li>
				<li class="login"><a href="login.html">Login</a></li>
			</ul>
		</nav>
	</div>
</div>

<br /><br /><br /><br />
<div id = "googleMap">
	<script>
		function myMap() {
			var mapProp= {
				center:new google.maps.LatLng(21.0167, 12.3000),
				zoom:2,
			};
			var barcelona = new google.maps.LatLng(41.2974, 2.0833);
			var rome = new google.maps.LatLng(41.9028, 12.4964);
			var paris = new google.maps.LatLng(48.8566, 2.3522);
			var london = new google.maps.LatLng(51.508742,-0.120850);
			var ortambo = new google.maps.LatLng(-26.1367 , 28.2411);
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker1 = new google.maps.Marker({position: london});
			var marker2 = new google.maps.Marker({position: ortambo});
			var marker3 = new google.maps.Marker({position: paris});
			var marker4 = new google.maps.Marker({position: rome});
			var marker5 = new google.maps.Marker({position: barcelona});
			marker1.setMap(map);	
			marker2.setMap(map);
			marker3.setMap(map);
			marker4.setMap(map);
			marker5.setMap(map);

			var flightPath = new google.maps.Polyline({
			path: [ortambo, london, paris, rome, barcelona],
			strokeColor: "#0000FF",
			strokeOpacity: 0.8,
			strokeWeight: 2
			});
			flightPath.setMap(map);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjj2DSxrDr9jArPVtf5gcguBo7m6NVAsM&callback=myMap"></script>
</div>

<div class = "europe-tour">
	<div class = "container">
		<h1> Europe Luxury Vacation </h1>
		<ul>
			<li class = "title"><b>HOME</b></li>
				<ul>
					<li>Distance: <b>0</b>km</li>
					<li>Leg Travel Duration: 0 Hrs 0 Mins</li>
				</ul>
				<p class = "line"></p>
			<li class = "title"><b>LONDON</b></li>
				<ul>
					<li>Distance: <b>9 068</b>km</li>
					<li>Leg Travel Duration: 11 Hrs 10 Mins</li>
				</ul>
				<p class = "line"></p>
			<li class = "title"><b>PARIS</b></li>
				<ul>
					<li>Distance: <b></b></li>
					<li>Leg Travel Duration:</li>
				</ul>
				<p class = "line"></p>
			<li class = "title"><b>ROME</b></li>
				<ul>
					<li>Distance: <b></b></li>
					<li>Leg Travel Duration:</li>
				</ul>
				<p class = "line"></p>
			<li class = "title"><b>BARCELONA</b></li>
				<ul>
					<li>Distance: <b></b></li>
					<li>Leg Travel Duration:</li>
				</ul>
				<p class = "line"></p>
			<li class = "title"><b>HOME</b></li>
				<ul>
					<li>Distance: <b></b></li>
					<li>Leg Travel Duration:</li>
				</ul>
				<p class = "line"></p>
		</ul>
	</div>
</div>
<footer class = "footer">
			<div class = "container">
				<div class = "logo">
					<p id = "logo">Travel App</p>
					<p id = "copyright">Group 15 - Website<br />Copyright 2017</p>
				</div>
				<nav>
					<ul class="nav">
						<p id = "follow-us">Follow us on<br /><a href = "http://www.twitter.com">Twitter</a> / <a href = "http://www.facebook.com">Facebook</a> / <a href = "http://www.instagram.com">Instagram</a></p>
					</ul>
				</nav>
			</div>
		</footer>
</body>
</html>