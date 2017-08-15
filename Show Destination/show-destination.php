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


		<!-- WELCOME BANNER -->
		<div class="welcome-banner" style="background-image: url(https://static.pexels.com/photos/41949/earth-earth-at-night-night-lights-41949.jpeg)">
				<h6><span class="logo">Travel Buddy!</span></h6>
				<h4 class="destination-name">Enter your dream destination</h4>
				<p class="hint"></p>
		</div>
		<!-- WELCOME BANNER END -->

		<!-- GOOGLE SEARCH -->
		<!-- <div class="map-info"></div> -->
		<div class="map-container">
			<div id="map"></div>
		</div>

		<!-- GOOGLE SEARCH END -->
		<!-- MORE INFORMATION -->

			<div class="container">
				<h3 class="container-heading">Gallery</h3>
				<div class="row photos-row"></div>
			</div>
			<div class="background-grey">
			<div class="container">
				<h3 class="container-heading">Resources</h3>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-4">
						<div href="Tour Show/tour-show.php" class="card card-link">
							<img class="card-img-top" src="https://static.pexels.com/photos/541517/pexels-photo-541517.jpeg" >
							<div class="card-block">
								<h4 class="card-title">Attractions</h4>
								<p class="card-text">Search for things to do.</p>
								<a class="btn btn-primary btn-sm" href="https://www.tripadvisor.co.za">View now</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-4">
						<div href="Tour Show/tour-show.php" class="card card-link">
							<img class="card-img-top" src="https://static.pexels.com/photos/5317/food-salad-restaurant-person.jpg" >
							<div class="card-block">
								<h4 class="card-title">Restaurants</h4>
								<p class="card-text">For the foodies.</p>
								<a class="btn btn-primary btn-sm" href="https://www.zomato.com/">Lets go</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div href="Tour Show/tour-show.php" class="card card-link">
						<img class="card-img-top" src="https://static.pexels.com/photos/286744/pexels-photo-286744.jpeg" >
						<div class="card-block">
							<h4 class="card-title">Accomodation</h4>
							<p class="card-text">Book accomodation.</p>
							<a class="btn btn-primary btn-sm" href="https://www.airbnb.com/">Next</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>


		<!-- MORE INFORMATION END -->

		<!-- REVIWES -->
		<div class="container">
			<h3 class="container-heading">Reviews</h3>
			<div class="row">
				<div class="comment">
					<img src="../img/Woman_3.jpeg" class="rounded-circle comment-image">
					<div class="comment-text">
							<h6 class="comment-heading">Simply Amazing!</h6>
							<p>I had the most amazing time exploring cultures throughout Asia.  My applause to the Cultural Tour.</p>
							<p class="comment-author">Ellen Bane</p>
					</div>
				</div>
				<div class="comment">
					<img src="../img/Man.jpeg" class="rounded-circle comment-image">
					<div class="comment-text">
							<h6 class="comment-heading">Thanks to Travel Buddy</h6>
							<p>Thanks to Travel Buddy, I could explore my surrounding before I went to Paris.</p>
							<p class="comment-author">Markus Ladden</p>
					</div>
				</div>
				<div class="comment">
					<img src="../img/Man_2.jpeg" class="rounded-circle comment-image">
					<div class="comment-text">
							<h6 class="comment-heading">Best Day Ever!</h6>
							<p>Exploring the streets of Barcelona was just breath-taking.  I thank Travel Buddy for providing me information regarding Barcelona!</p>
							<p class="comment-author">Alex O'Malley</p>
					</div>
				</div>
			</div>
			<form>
				<div class="form-group">
			    <h5 class="comment-heading">Write your own review</h5>
				<br />
				<label for = "headerInput">Heading:</label>
				<input type="text" class="form-control" id="commentHeadingInput">
				<br />
				<label for = "headerInput">Review:</label>
			    <input type="text" class="form-control" id="commentInput">
			  </div>
				<button type="submit" class="btn btn-primary float-right">Submit</button>
			</form>
		</div>
		<!-- REVIWES -->

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
				<a href="../Show%20Destination/show-destination.html?location=California" class="list-group-item active">
			    California
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 4 747.8km</p>
					<p><b>Leg Travel Duration:</b> 4 Hrs 41 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.html?location=Miami" class="list-group-item active">
			    Miami
					<button type="button" class="btn btn-danger btn-sm float-right">Delete</button>
			  </a>
				<div href="#" class="list-group-item list-group-item-action">
					<p><b>Distance:</b> 2 053,1km</p>
					<p><b>Leg Travel Duration:</b> 3Hrs 5 Mins</p>
				</div>
				<a href="../Show%20Destination/show-destination.html?location=NewYork" class="list-group-item active">
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
		<!-- NEW TRAVELBOOK -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="popover-modal js-new-travelbook-modal">
				<div class="popover-modal-container">
						<h4>Name your new travelbook</h4>
						<form>
							<div class="form-group">
								<input type = "text" class="form-control"></input>
							</div>
							<a class="btn btn-primary" href="../Tour Show/tour-show.php">Okay</a>
							<button type="button" class="btn btn-secondary js-new-travelbook">Cancel</button>
						</form>
				</div>
		</div>
		<div class="popover-modal js-new-existing-modal">
			<div class="popover-modal-container">
					<h4>Select travelbook</h4>
					<form>
						<div class="form-group">
						<label class="custom-control custom-radio">
							<input id="radio1" name="radio" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Travelbook 1</span>
						</label>
						</div>
						<div>
						<label class="custom-control custom-radio">
							<input id="radio2" name="radio" type="radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Travelbook 2</span>
						</label>
						</div>
						<a class="btn btn-primary" href="../Journal Destinations/journal-destinations.php">Okay</a>
						<button type="button" class="btn btn-secondary js-existing-travelbook">Cancel</button>
					</form>
			</div>
		</div>
		<!-- NEW TRAVELBOOK END -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="https://msurguy.github.io/ladda-bootstrap/dist/ladda.min.js"></script>
		<script src="../js/close_menu.js"></script>
		<script src="../js/show_destination.js"></script>
		<script async defer
	 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUBHxdSTihUNqqFxLVHAc0cYFKYIoR6FQ&libraries=places&callback=initMap">
	 </script>
         async defer></script>
				 <script>
		 			$(".js-new-travelbook").click( function() {
		 			   $(".js-new-travelbook-modal").toggle();
		 			});

		 			$(".js-existing-travelbook").click( function() {
		 			   $(".js-new-existing-modal").toggle();
		 			});
		 		</script>
	</body>
</html>
