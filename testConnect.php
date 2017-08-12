<?php
//Step1
 $db_travel = mysqli_connect('localhost','root','root','Group15_Database_Travel')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
//Step2
echo $_GET['fname'];
//echo $_GET['password'];
$query_select_user_table = "SELECT * FROM Users";
mysqli_query($db_travel, $query_select_user_table) or die('Error querying database.');

//Step3
$result = mysqli_query($db_travel, $query_select_user_table);
$row = mysqli_fetch_array($result);

 while ($row = mysqli_fetch_array($result)) {
 echo $row['User_username'] . ' ' . $row['User_surname'] . ': ' . $row['User_firstname'] . ' ' . $row['User_email'] .'<br />';
}
if(isset($_GET['fname'], $_GET['password'])) 
    {     

        $name = $_GET['fname']; 
        $password = $_GET['password']; 

        $result1 = mysqli_query($db_travel, "SELECT User_username, User_password FROM Users WHERE User_username = '".$name."' AND  User_password = '".$password."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
        	echo 'The username and password are correct!';
            //$_SESSION["logged_in"] = true; 
            //$_SESSION["naam"] = $name; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }

}
//Step 4
mysqli_close($db_travel);
?>

</body>
</html>