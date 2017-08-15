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
				<a class="logo logo-small-light" href="../Landing Page/landing-page.html">Travel Buddy</a>
				<div>
					<button class="btn btn-success btn toggle-travelbook">My Travelbook</button>
					<a class="btn btn-outline-secondary btn-sm" href="../home.html">Logout</a>
				</div>
		</nav>
		<!-- NAVBAR END -->
		<!-- BANNER -->
		<div class="image-banner" style="background-image: url(https://static.pexels.com/photos/34608/pexels-photo.jpg);">
    	<div class="mask">
        <h1>Destination name</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet congue velit quis gravida. Vivamus cursus arcu a tempor dictum.Quisque sapien nisl, porttitor ut ligula sed, commodo eleifend purus. Eget scelerisque erat condimentum at. Aenean consectetur magna tempus orci ullamcorper, ac faucibus.</p>
    	</div>
		</div>
		<!-- BANNER END -->
		<!-- BUTTONS -->
		<div class="container container-small mt-3 clearfix">
				<button class="btn btn-success ml-1 float-right js-new-travelbook">New Travelbook</button>
				<button class="btn btn-primary ml-1 float-right js-existing-travelbook">Add to my existing travelbook</button>
		</div>
		<!-- BUTTONS END-->
		<!-- LOCAL ATTRACTIONS -->
		<div class="container">
			<h3 class="container-heading">Local Attractions</h3>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<a class="card card-link" href="https://www.tripadvisor.co.za/Attractions">
					<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</a>
				</div>
  			<div class="col-12 col-md-6 col-lg-4">
					<a class="card card-link" href="https://www.tripadvisor.co.za/Attractions">
					<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</a>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<a class="card card-link" href="https://www.tripadvisor.co.za/Attractions">
					<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</a>
				</div>
			</div>
		</div>
		<!-- LOCAL ATTRACTIONS END -->
		<!-- TOURIST ATTRACTIONS -->
		<div class="background-grey">
			<div class="container">
				<h3 class="container-heading">Tourist Attractions</h3>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="https://www.tripadvisor.co.za/Attractions">
						<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
						<div class="card-block">
							<h4 class="card-title">Card title</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</a>
					</div>
	  			<div class="col-12 col-md-6 col-lg-4">
						<a class="card card-link" href="https://www.tripadvisor.co.za/Attractions">
						<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
						<div class="card-block">
							<h4 class="card-title">Card title</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</a>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<a class="card card-link" href="https://www.tripadvisor.co.za/Attractions">
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
		<!-- TOURIST ATTRACTIONS END -->
		<!-- ACCOMODATION ATTRACTIONS -->
		<div class="container">
			<h3 class="container-heading">Accomodation</h3>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<a class="card card-link" href="https://www.airbnb.com/">
					<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</a>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<a class="card card-link" href="https://www.airbnb.com/">
					<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</a>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<a class="card card-link" href="https://www.airbnb.com/">
					<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</a>
				</div>
			</div>
		</div>
		<!-- ACCOMODATION ATTRACTIONS END -->
		<!-- RESTAURANT ATTRACTIONS -->
		<div class="background-grey">
			<div class="container">
				<h3 class="container-heading">Restaurants</h3>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-4">
						<a class="card card-link" href="https://www.zomato.com/">
						<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
						<div class="card-block">
							<h4 class="card-title">Card title</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</a>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<a class="card card-link" href="https://www.zomato.com/">
						<img class="card-img-top" src="https://static.pexels.com/photos/34608/pexels-photo.jpg" >
						<div class="card-block">
							<h4 class="card-title">Card title</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</a>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<a class="card card-link" href="https://www.zomato.com/">
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
		<!-- RESTAURANT ATTRACTIONS END -->
		<!-- REVIWES -->
		<div class="container">
			<h3 class="container-heading">Reviews</h3>
			<div class="row">
				<div class="comment">
					<img src="https://static.pexels.com/photos/295821/pexels-photo-295821.jpeg" class="rounded-circle comment-image">
					<div class="comment-text">
							<h6 class="comment-heading">Best day evar!</h6>
							<p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<p class="comment-author">Jane Doe</p>
					</div>
				</div>
				<div class="comment">
					<img src="https://static.pexels.com/photos/262226/pexels-photo-262226.jpeg" class="rounded-circle comment-image">
					<div class="comment-text">
							<h6 class="comment-heading">Best day evar!</h6>
							<p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<p class="comment-author">Jane Doe</p>
					</div>
				</div>
				<div class="comment">
					<img src="https://static.pexels.com/photos/91227/pexels-photo-91227.jpeg" class="rounded-circle comment-image">
					<div class="comment-text">
							<h6 class="comment-heading">Best day evar!</h6>
							<p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
							<p class="comment-author">Jane Doe</p>
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
		<!-- PREVIOUS SEARCH -->
		<div class="background-grey">
			<div class="container">
			  <h3 class="container-heading">People also searched for</h3>
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
		</div>
		<!-- PREVIOUS SEARCH END -->
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
							<a class="btn btn-primary" href="../Tour Show/tour-show.html">Okay</a>
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
						<a class="btn btn-primary" href="../Tour Show/tour-show.html">Okay</a>
						<button type="button" class="btn btn-secondary js-existing-travelbook">Cancel</button>
					</form>
			</div>
		</div>
		<!-- NEW TRAVELBOOK END -->
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
		<script>
			$(".js-new-travelbook").click( function() {
			   $(".js-new-travelbook-modal").toggle();
			});

			$(".js-existing-travelbook").click( function() {
			   $(".js-new-existing-modal").toggle();
			});
		</script>
		<script src="../js/close_menu.js"></script>
	</body>
</html>
