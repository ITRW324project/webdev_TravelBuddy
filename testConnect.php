<?php
   include('config.php');
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form     
      $myusername = $_POST['fname'];
      $mypassword = $_POST['password'];
      echo $myusername;
      $sql = "SELECT User_id FROM Users WHERE User_username = '".$myusername."' AND  User_password = '".$mypassword."'";
      $result = mysqli_query($db_travel,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active']; 
      $count = mysqli_num_rows($result);    
       echo 1;
      /*if($count == 1)
      {
      $post = 'name'=.$myusername.'&bool'=.$count;
      $ch = curl_init();
      $curlConfig = array(
                    CURLOPT_URL => "http:"http://simeon.ddns.net:8085/travelappbuddy/Login Page/login.php",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => http_build_query($post))
      curl_setopt_array($ch, $curlConfig);
      $result = curl_exec($ch);
      curl_close($ch);
      print $result;
      }*/
   }
      
echo 3;



//Step 4
mysqli_close($db_travel);
 
?>


<<form action = "http://simeon.ddns.net:8085/travelappbuddy/Login Page/createCookie.php" method = "post">
	<input name = "name" type = "text" value = "<?php echo htmlspecialchars($myusername); ?>"></input>
	<input name = "bool" type = "text" value = "<?php echo htmlspecialchars($count); ?>"></input>
	<input type = "submit" value ="Submit"></input>
</form>
</body>
</html>