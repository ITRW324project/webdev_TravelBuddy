<?php

include('config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT user_username, user_password, active FROM users WHERE user_username = '".$username."' AND  user_password = PASSWORD('".$password."') AND active = '1'";
            $result = mysqli_query($db_travel,$sql);
            $row = mysqli_fetch_row($result,MYSQLI_ASSOC);
            $active = $row['active']; 
            $count = mysqli_num_rows($result);          
        	if($count == 1)
        	{	
        		echo 1;
        	}else
        	{
        		echo "Your username and password is incorect or the acount is not active.";
        	}
        } else
        {
        	echo "You did not enter your user name or pasword.";
        }
    }

    mysqli_close($db_travel);
?>