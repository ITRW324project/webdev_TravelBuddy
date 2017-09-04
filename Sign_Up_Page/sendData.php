<?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $name = $_GET['fName'];
    $lname = $_GET['lName'];
    $email = $_GET['email'];
    $contactNum = (int)$_GET['number'];
    $The_username =$_GET['uName'];
    $Password = $_GET['pWord'];
    $town = $_GET['town'];

    $url = "http://192.168.2.150.net:8080/sign.php";
    $post = 'fName='.$name.'&lName='.$lname.'&email='.$email.'&number='.$contactNum.'&uName='.$The_username.'&pWord='.$Password.'&town='.$town;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_FLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HEDDER, true);

    $response = curl_exec($ch);
  }
 ?>
