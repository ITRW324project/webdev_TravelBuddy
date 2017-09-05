
<?php
  include('config.php');
if($_SERVER["REQUEST_METHOD"] == "GET") 
{
  $name = $_GET['fName'];
  $lname = $_GET['lName']; 
  $email = $_GET['email'];
  $contactNum = (int)$_GET['number'];
  $The_username =$_GET['uName'];
  $Password = $_GET['pWord'];
  $town = $_GET['town'];


  //$trip_id = (int)mysql_insert_id($db_travel);
 /* mysqli_select_db("Group15_Database_Travel",$db_travel);
  $sql = "SELECT User_username FROM Users WHERE User_username = '".$The_username."'";
  $result = mysqli_query($db_travel,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC)
  $active = $row['active'];
  $count = mysqli_num_rows($result);
  echo $count;
  if($count == 1) 
  {
    echo $name alredy exist in db;
  }
  else
  {*/
    $insert = "INSERT INTO Users (User_username,User_surname,
              User_firstname,User_email,User_Contact,User_Town,User_password) 
              VALUES ('".$The_username."','".$lname."','".$name."','".$email."',
              '".$contactNum."','".$town."','".$Password."')";
    mysqli_query($db_travel,$insert);
    header("Location: http://simeon.ddns.net:8085/travelappbuddy/Login Page/login.html");
  //}

  }
                        
mysqli_close($db_travel);
?>