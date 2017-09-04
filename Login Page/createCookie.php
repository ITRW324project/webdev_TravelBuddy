<!DOCTYPE html>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		echo $_POST['user'];
		$cookie_value = $_POST['user'];
		setcookie("UserName", $cookie_value, time() + (7200), "/" ,"192.168.2.104:8085");
		echo $cookie_value;
		//header("Location: http://192.168.2.104:8085/travelappbuddy/Landing%20Page/landing-page.php");
	}
?>
