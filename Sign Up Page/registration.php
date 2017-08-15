<!DOCTYPE html>
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
				<a href = "../home.php" class="logo logo-small-light">Travel Buddy</a>
				<div>
					<a class="btn btn-outline-secondary btn-sm" href="../Login Page/login.php">Login</a>
				</div>
		</nav>
		<!-- NAVBAR END -->
		<div class="fullscreen-section">
				<div class="card">
				<p class="logo logo-small-dark">Travel Buddy</p>
				<h2>Sign up</h2>
				<p>Please fill in the following details to start your adventure!</p>
				<form action = "http://simeon.ddns.net:8080/signUptoets.php" method = "get">
					<div class="form-group">
						<p>First Name:</p>
						<input name = "fName" type = "text" class="form-control"></input>
					</div>
					<div class="form-group">
						<p>Last Name:</p>
						<input name = "lName" type = "text" class="form-control"></input>
					</div>
					<div class="form-group">
						<p>E-Mail: </p>
						<input name = "email" type = "email" class="form-control"></input>
					</div>
					<div class="form-group">
						<p>Contact Number: </p>
						<input name = "number" type = "int" class="form-control"></input>
					</div>
					<div class="form-group">
						<p>Username: </p>
						<input name = "uName" type = "text" class="form-control"></input>
					</div>
					<div class="form-group">
						<p>Password: </p>
						<input name = "pWord" type = "password" class="form-control"></input>
					</div>
					<div class="form-group">
						<p>Re-enter Password: </p>
						<input name = "pWord2" type = "password" class="form-control"></input>
					</div>
					<div class="form-group">
						<p>Where do you stay? </p>
						<input id = "town" type = "text" class="form-control"></input>
					</div>
					<input type="submit" value="Submit" class="btn btn-primary btn-submit float-right">
					<!--<a href="../Landing Page/landing-page.php" class = "btn btn-primary btn-submit float-right">Submit</a> -->
					<div class = "buttons">
						<a href = "../home.php">Back</a>&emsp;
					</div>
				</form>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</body>
</html>
