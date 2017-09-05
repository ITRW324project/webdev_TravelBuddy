<?php

include('config.php');
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	if(!empty($_GET['email']) && !empty($_GET['hash']))
	{
		$email = $_GET['email'];
		$hash = $_GET['hash'];

		$sql = "SELECT user_email, hash, active FROM users WHERE user_email = '".$email."' AND  hash = '".$hash."' AND  active = 0";
        $result = mysqli_query($db_travel,$sql);
        $row = mysqli_fetch_row($result,MYSQLI_ASSOC);
        $active = $row['active']; 
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
        	$update = "UPDATE users SET active=1 WHERE user_email = '".$email."' AND hash = '".$hash."' AND active = 0";
        	$result = mysqli_query($db_travel,$update);
        	echo "Your account has been activated, you can log in now login";
        	Header("Location: http://192.168.2.104:8085/travelappbuddy/Login Page/log.html");
        } else
        {
        	echo "The url is invalid, or the account is alredy activated.";
        }
	}else
	{
		echo "Invalid approach, pleas use the link that was provided to you via the email.";
	}
} 
mysqli_close($db_travel);

?>