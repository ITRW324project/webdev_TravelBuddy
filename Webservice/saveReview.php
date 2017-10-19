<?php
  include('config.php');
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(!empty($_POST["travelBook_name"]) && !empty($_POST["userName"]) && !empty($_POST["heading"]) && !empty($_POST["review"]))
    {
      $travel_name = $_POST['travelBook_name'];
      $username = $_POST['userName'];
      $heading = $_POST['heading'];
      $review = $_POST['review'];

      $response = array();

      $sql = "SELECT user_id FROM users WHERE user_username = '".$username."'";
      $result = mysqli_query($db_travel,$sql);
      $count = mysqli_num_rows($result);

      if($count == 1)
      {
        $row = $result->fetch_assoc();
        $user_id = $row['user_id'];
      }
      else
      {
        $response["result"] = "No such user exists";
        $response["success"] = false;
        echo json_encode($response);
      }

      $sql = "SELECT id FROM Travel_Books WHERE travelBook_name = '".$travel_name."'";
      $result = mysqli_query($db_travel,$sql);
      $count = mysqli_num_rows($result);

      if($count == 1)
      {
        $row = $result->fetch_assoc();
        $tb_id = $row['id'];
      }
      else
      {
        $response["result"] = "No such travel book exists";
        $response["success"] = false;
        echo json_encode($response);
      }

      $insert = "INSERT INTO Reviews (TravelBook_ID, User_ID, Heading, Review) VALUES ('".$tb_id."','".$user_id."','".$heading."','".$review."')";
      mysqli_query($db_travel,$insert);
      $response["result"] = "Review successfully added";
      $response["success"] = true;
      echo json_encode($response);

      $result->free();
    }
    else
    {

    }
  }
 ?>
