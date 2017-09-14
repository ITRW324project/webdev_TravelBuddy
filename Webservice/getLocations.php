<?php
  include ('config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      $tbName = $_POST['travelName'];

      $sql_query = "SELECT geolocations FROM Travel_Books WHERE travelBook_name = '".$tbName."'";
      $result = mysqli_query($db_travel, $sql_query);
      $value = mysqli_fetch_object($result);
      $geo = $value->geolocations;
      $result->free();

      if($count = 1)
      {
        $response['result'] = $geo;
        $response["success"] = true;
        echo json_encode($response);
      }
      else
      {
        $response['result'] = "No travelbooks found for user!";
        $response["success"] = false;
        echo json_encode($response);
      }
  }
 ?>
