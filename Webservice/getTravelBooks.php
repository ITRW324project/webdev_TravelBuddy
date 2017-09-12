<?php
  include ('config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(!empty($_POST['username']))
    {
      $username = $_POST['username'];
      $sql_query = "SELECT user_id FROM users WHERE user_username = '".$username."' limit 1";
      $result = mysqli_query($db_travel, $sql_query);
      $value = mysqli_fetch_object($result);
      $_SESSION['u_id'] = $value->user_id;

      $sql_query = "SELECT Plan_Name FROM Plan WHERE User_ID = '".$_SESSION['u_id']."'";
      $result = mysqli_query($db_travel, $sql_query);
      $tbs = array();
      $count = mysqli_num_rows($result);

      if($count > 0)
      {
        while($row = mysqli_fetch_array($result))
        {
          $tbs[] = $row['tbs'];
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
