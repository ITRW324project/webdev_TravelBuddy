<?php
  include ('config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      $username = $_POST['username'];

      $sql_query = "SELECT travelBook_name FROM Travel_Books WHERE user_name = '".$username."'";
      $result = mysqli_query($db_travel, $sql_query);
      $tbs = array();
      $count = mysqli_num_rows($result);

      if($count > 0)
      {
        while($row = $result->fetch_assoc())
        {
          $tbs[] = $row['travelBook_name'];
        }

        $response['result'] = implode(',', $tbs);
        $response["success"] = true;
        echo json_encode($response);
      }
      else
      {
        $response['result'] = "No travelbooks found for user!";
        $response["success"] = false;
        echo json_encode($response);
      }

      $result->free();
  }
 ?>
