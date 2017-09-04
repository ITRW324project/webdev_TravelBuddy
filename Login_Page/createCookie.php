<!DOCTYPE html>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$cookie_value = $_POST['name'];
		$bool = $_POST['bool'];
		if($bool == "1")
		{
			setcookie("UserName", $cookie_value, time() + (7200), "/" ,"simeon.ddns.net");
			echo $_COOKIE['UserName'];
			header("Location: http://192.168.2.104:8085/travelappbuddy/Landing Page/landing-page.php");
		}
		if($bool == "0")
		{
			header("Location: http://192.168.2.104:8085/travelappbuddy/Login Page/relogin.html");
		}
	}
?>
