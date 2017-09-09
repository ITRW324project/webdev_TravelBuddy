<?php
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $tb_name = $_POST['newTB'];
    $u_name = $_POST['user']

    $sql_query = "SELECT User_ID FROM users WHERE user_name = '".$u_name."'";
    $u_id = mysqli_query($db_travel,$sql_query);

    $sql_query = "SELECT Plan_ID FROM Plan WHERE Plan_Name = '".$tb_name."' AND User_ID = '".$u_id."'";
    $result_loc = mysqli_query($db_travel,$sql_query);
    $row = mysqli_fetch_array($result_loc,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result_loc);
    return $count;

    if($count == 0)
    {
      $sql_query = "INSERT INTO Plan (Plan_Name, User_ID) VALUES ('".$tb_name."', '".$u_id."')";
      mysqli_query($db_travel,$sql_query_loc_w);
    }
    else
    {

    }
}
?>
