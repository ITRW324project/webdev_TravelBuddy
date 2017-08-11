<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Travel App</title>
		<link href = "css/Footer Style.css" type = "text/css" rel = "stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href = "css/home_style.css" type = "text/css" rel = "stylesheet">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	</head>
	
	<body>
	<p class = "itenerary">My Itenerary</p>

	<div class = "sidebar">
		<p class = "close">Close</p>
		<center>
			<h1 class = "box-item"><b>MY </b><span class = "bold-logo">ITENERARY</span></h1>
		</center>

		<ul class = "sidebar-section">
			<li class = "sidebar-item" id = "destination">
				<h2>Empty</h2>
			</li>
		</ul>

		<center>
			<a href="#"><h1 class="box-item box-item-inner signup">
			<i class = "newJourney"></i>
				START NEW JOURNEY
			</h1></a>
		</center>
	</div>
	<script src="js/close_menu.js"></script>
	<div class = "content">
		<header class = "header">
			<div class = "container">
				<div class = "logo">
				<h2 style = "font-size: 45px">Travel App</h2>
				</div>
				<nav>
					<ul class="nav">
						<li class="sign-up"><a href="registration.html">Sign Up</a></li>
						<li class="login"><a href="login.html">Login</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<div class = "hero">
			<div class = "container">
				<center><img class = "hero-logo" src = "img/logo.png"></center>
				<center><h1>Let's go on an Adventure!</h1></center>
				<p>This is only a load of rubbish text that has absolutely no meaning and pays no contribution to that of the site in any way. However, I do need to type more than enough to ensure that the maximum left nad right margins are not set too close or too far away. They need to be far enough to be able to let the text stretch, but also be close enough to be able to make a couple of lines of text.</p>
				<br />
				<center><a class = "lets-go" href = "browse.html">Lets GO!</a></center>
			</div>
		</div>
		
		<div class = "section1">
			<div class = "container">
				<center><h2>How does it work?</h2></center>
					<div class = "boxes">
						<div class = "box">
								<img class = "box-pic1" src = "img/plane.png">					
								<p>Browse destinations worldwide</p>
						</div>
						<div class = "box">
								<img class = "box-pic2" src = "img/eyes.png">						
								<p>View ratings and plan your trips</p>
						</div>
						<div class = "box">
								<img class = "box-pic3" src = "img/star.png">						
								<p>Rate your own experiences</p>
						</div>
					</div>
			</div>
		</div>
		
		<div class = "section2">
			<div class = "container">
				<br /><br />
				<h2>View and use preplanned tours</h2>
					<div class = "boxes">
						<a class = "europe-tour" href = "#"><div class = "box">
							<div class = "top-box">
								<img class = "box1-pic" src = "img/europe.png">
								<p class = "title">Europe Luxury Vacation</p>
								<p id = "info">2 Weeks</p>
							</div>
						</div></a>
						<a class = "south-african-tour" href = "#"><div class = "box">
							<div class = "top-box">
								<img class = "box2-pic" src = "img/south africa.png">
								<p class = "title">Best of South Africa</p>
								<p id = "info">1 Week</p>
							</div>
						</div></a>
						<a class = "island-tour" href = "#"><div class = "box">
							<div class = "top-box">
								<img class = "box3-pic" src = "img/island.png">
								<p class = "title">Dream Island Vacation</p>
								<p id = "info">2-3 Weeks</p>
							</div>
						</div></a>
					</div>
			</div>
		</div>
		
		<div class = "section3">
			<div class = "container">
				<br /><br />
				<center><h2>Top Destinations</h2></center>
					<div class = "boxes">
						<div class = "box">
								<img class = "box-pic1" src = "img/switzerland.png">					
								<p id = "city">Switzerland</p><p id = "reviews">600 Reviews</p><p id = "star-rating"><b>5</b> Stars</p>
						</div>
						<div class = "box">
								<img class = "box-pic2" src = "img/orlando.png">						
								<p id = "city">Orlando</p><p id = "reviews">1267 Reviews</p><p id = "star-rating"><b>4.8</b> Stars</p>
						</div>
						<div class = "box">
								<img class = "box-pic3" src = "img/france.png">						
								<p id = "city">France</p><p id = "reviews">20 Reviews</p><p id = "star-rating"><b>5</b> Stars</p>
						</div>
					</div>
			</div>
		</div>
		
		<div class = "section4">
			<div class = "container">
				<br /><br />
				<center><h2>What people said about us</h2></center>
					<ul>
						<li style = "float: left">
						<div>
							<p><img class = "person" src = "img/Dying Light.png"></p>
							<p id = "user-review">Best experience ever</p><p id = "desc">I cant even begin to explain the adventure we had as a family on this trip. Very unforgetable journey.</p>
						</div>
						</li>
						<li style = "float: left">
						<div>
							<p><img class = "person" src = "img/Dying Light.png"></p>
							<p id = "user-review">Best experience ever</p><p id = "desc">I cant even begin to explain the adventure we had as a family on this trip. Very unforgetable journey.</p>
						</div>
						</li>
						<li style = "float: left">
						<div>
							<p><img class = "person" src = "img/Dying Light.png"></p>
							<p id = "user-review">Best experience ever</p><p id = "desc">I cant even begin to explain the adventure we had as a family on this trip. Very unforgetable journey.</p>
							<br /><br /><br /><br />
						</div>
						</li>
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
	</div>
	</body>
</html>