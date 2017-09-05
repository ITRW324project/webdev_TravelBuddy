<?php
	include('config.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(!empty($_POST["fName"]) && !empty($_POST["lName"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["uName"]) && !empty($_POST["pWord"]) && !empty($_POST["town"])) 
    {
      
  		$firstname = $_POST['fName'];
  		$surename = $_POST['lName']; 
  		$email = $_POST['email'];
  		$contactNum = (int)$_POST['number'];
  		$username = $_POST['uName'];
  		$password = $_POST['pWord'];
  		$town = $_POST['town'];

  		$sql = "SELECT user_username, user_email, user_contact FROM users WHERE user_username = '".$username."' AND  user_email = '".$email."' AND  user_contact = '".$contactNum."'";
      $result = mysqli_query($db_travel,$sql);
      $row = mysqli_fetch_row($result,MYSQLI_ASSOC);
      $active = $row['active']; 
      $count = mysqli_num_rows($result);
      if($count > 0) {
          echo "Some or all of the credentials are alredy in use.";
      }else{
        $hash = md5(rand(0,1000));
  		  $insert = "INSERT INTO users (user_username,user_surname,
           		  	user_firstname, user_email, user_contact, user_town, user_password, hash) 
             			VALUES ('".$username."','".$surename."','".$firstname."','".$email."',
          	   		'".$contactNum."','".$town."',PASSWORD('".$password."'), '".$hash."')";
  		  mysqli_query($db_travel,$insert);
        echo "Your account has been created sucsessfully. An email has been sent to ".$email." to verify your account.";

        $to = $email;
        $subject = "Signup | Verification";
        $message = "

        Thanks for signing up with Travel app Buddy. We hope you enjoy the experiance.
        Your account has been created, you can start using your account after you have activated your account by following the url below.

        -------------------------
        Username is ".$username."
        Password is ".$password."
        -------------------------

        Pleas click on the link to activate your account:
        http://192.168.2.150:8080/verification.php?email=".$email."&hash=".$hash."

        ";
        $headers = "From: noreply@travelappbuddy.com"."\r\n";
        mail($to,$subject,$message,$headers);

      }
      
  	}else
    {
      echo "You did not filled in the entire form. Pleas fill in the entire";
    }

  }else{
    echo "Post is not working";
  }
mysqli_close($db_travel);
?>