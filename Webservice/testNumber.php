<?php
    include('config.php');
    // get the q parameter from URL
    $number = $_REQUEST["number"];
    $sql = "SELECT user_Contact FROM users WHERE user_contact = '".$number."'";
    $result = mysqli_query($db_travel,$sql);
    $row = mysqli_fetch_row($result,MYSQLI_ASSOC);
    $active = $row['active']; 
    $count = mysqli_num_rows($result);
    $num_length = strlen((string)$number);

    if($number == "")
    {
    	echo "";
    }

    if($count == 1)
    {
    	echo "The number is alredy in use.";
    } else if($num_length == 10)
    {
    	echo "The the number is valid.";
    }else
    {
    	echo "Invalid number, pleas ensure that the number only consist of 10 digits.";
    }


?>