<!DOCTYPE html>
<?php
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		$cookie_value = $_GET['name'];
		$bool = $_GET['bool'];
		if($bool == "1")
		{
			setcookie("UserName", $cookie_value, time() + (7200), "/" ,"simeon.ddns.net");
			echo $_COOKIE['UserName'];
			header("Location: http://simeon.ddns.net:8085/travelappbuddy/Landing Page/landing-page.php");
		}
		if($bool == "0")
		{
			header("Location: http://simeon.ddns.net:8085/travelappbuddy/Login Page/relogin.php");
		}
	}
?>
