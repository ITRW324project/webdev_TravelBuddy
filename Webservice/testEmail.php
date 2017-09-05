<?php
    include('config.php');
    $email = $_REQUEST["email"];
    $sql = "SELECT user_email FROM users WHERE user_email = '".$email."'";
    $result = mysqli_query($db_travel,$sql);
    $row = mysqli_fetch_row($result,MYSQLI_ASSOC);
    $active = $row['active']; 
    $count = mysqli_num_rows($result);
    $valid = filter_var( $email, FILTER_VALIDATE_EMAIL );
    if($count == 1) 
    {
        echo "The email is alredy in use.";
    } 
    else if(filter_var( $email, FILTER_VALIDATE_EMAIL ))
    {
    	echo "The e-mail address is valid.";
    } else
    {
    	echo "Invalid email address.";
    }


mysqli_close($db_travel);
?>