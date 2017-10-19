<?php
  include('config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $tbName = $_POST['travelBook_name'];

    $sql = "SELECT id FROM Travel_Books WHERE travelBook_name = '".$tbName."'";
    $result = mysqli_query($db_travel, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {
      $row = $result->fetch_assoc();
      $tb_id = $row['id'];
    }
    else
    {
      $response['result'] = "No such travel book exists";
      $response['success'] = false;
      echo json_encode($response);
    }

    $sql = "SELECT User_id, Heading, Review FROM Reviews WHERE TravelBook_ID = '".$tb_id."'";
    $name = array();
    $head = array();
    $rev = array();
    $count = mysqli_num_rows($result);

    if(count > 0)
    {
      while($row = $result->fetch_assoc())
      {
        $sql = "SELECT user_username FROM users WHERE user_id = '".$row['User_id']."'";
        $result1 = mysqli_query($db_travel, $sql);
        $count1 = mysqli_num_rows($result);

        if($count == 1)
        {
          $row1 = $result->fetch_assoc();
          $name[] = $row1['user_username'];
          $rev[] = $row['Review'];
          $head[] = $row['Heading'];
        }
      }

      $response['headings'] = implode(',',$head);
      $response['reviews'] = implode(';',$rev);
      $response['names'] = implode(',',$name);
      echo json_encode($response);
    }
    else
    {
      $response['result'] = "No reviews found for travelbook";
      $response["success"] = false;
      echo json_encode($response);
    }

    $result->free();
  }
 ?>
