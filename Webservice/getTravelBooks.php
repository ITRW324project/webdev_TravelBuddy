<?php
  include ('config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(!empty($_POST['username']))
    {
      $username = $_POST['username'];
      $sql_query = "SELECT user_id FROM users WHERE user_username = '".$username."''";
      $result = mysqli_query($db_travel, $sql_query);
      $value = mysqli_fetch_object($result);
      $_user_id = $value->user_id;
      $result->free();

      $sql_query = "SELECT Plan_Name FROM Plan WHERE User_ID = '".$user_id"'";
      $result = mysqli_query($db_travel, $sql_query);
      $tbs = array();
      $count = mysqli_num_rows($result);

      if($count > 0)
      {
        while($row = $result->fetch_assoc())
        {
          $tbs[] = $row['Plan_Name'];
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
    }
  }
 ?>
