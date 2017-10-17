<?php
  include ('config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      $username = $_POST['username'];

      if($username != null)
      {
        $sql_query = "SELECT travelBook_name, Description FROM Travel_Books WHERE user_name = '".$username."'";
        $result = mysqli_query($db_travel, $sql_query);
        $tbs = array();
        $desc = array();
        $count = mysqli_num_rows($result);

        if($count > 0)
        {
          while($row = $result->fetch_assoc())
          {
            $tbs[] = $row['travelBook_name'];
            $desc[] = $row['Description'];
          }

          $response['result'] = implode(',', $tbs);
          $response['description'] = implode(';', $desc);
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
      else
      {
        $sql_query = "SELECT travelBook_name, Description FROM Travel_Books";
        $result = mysqli_query($db_travel, $sql_query);
        $tbs = array();
        $desc = array();
        $count = mysqli_num_rows($result);

        if($count > 0)
        {
          while($row = $result->fetch_assoc())
          {
            $tbs[] = $row['travelBook_name'];
            $desc[] = $row['Description'];
          }

          $response['result'] = implode(',', $tbs);
          $response['description'] = implode(';', $desc);
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

  }
 ?>
