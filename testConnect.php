<?php
   include('config.php');
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form     
      $myusername = $_GET['fname'];
      $mypassword = $_GET['password']; 
      echo $myusername;
      $sql = "SELECT User_id FROM Users WHERE User_username = '".$myusername."' AND  User_password = '".$mypassword."'";
      $result = mysqli_query($db_travel,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active']; 
      $count = mysqli_num_rows($result);    
   }

//Step 4
mysqli_close($db_travel);
?>
<form action = "http://simeon.ddns.net:8085/travelappbuddy/Login Page/login.php" method = "get">
	<input name = "name" type = "text" value = "<?php echo htmlspecialchars($myusername); ?>"></input>
	<input name = "bool" type = "text" value = "<?php echo htmlspecialchars($count); ?>"></input>
	<input type = "submit" value ="Submit"></input>
</form>
</body>
</html>