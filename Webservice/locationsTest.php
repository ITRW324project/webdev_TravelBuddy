<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $s_loc_name = $_POST['start'];
    $f_loc_name = $_POST['end'];
    $w_loc_name = $_POST['waypoints']
    $tb_name = $_POST['newTB'];
    $u_name = $_POST['user'];

    function count($name)
    {
      $sql_query = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$name."'";
      $result_loc = mysqli_query($db_travel,$sql_query);
      $row = mysqli_fetch_array($result_loc,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result_loc);
      return $count;
    }

    function addLocation($name)
    {
      $sql_query_loc = "INSERT INTO Locations (Loc_Name) VALUES ('".$name."')";
      mysqli_query($db_travel,$sql_query_loc);

      $sql_query = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$name."'";
      $result_loc = mysqli_query($db_travel,$sql_query);

      return $result_loc;
    }

    $sql_query = "SELECT User_ID FROM users WHERE user_name = '".$u_name."'";
    $u_id = mysqli_query($db_travel,$sql_query);

    $sql_query = "SELECT Plan_ID FROM Plan WHERE Plan_Name = '".$tb_name."' AND User_ID = '".$u_id."'";
    $result_loc = mysqli_query($db_travel,$sql_query);
    $row = mysqli_fetch_array($result_loc,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result_loc);

    if($count == 0)
    {
      $sql_query = "INSERT INTO Plan (Plan_Name, User_ID) VALUES ('".$tb_name."', '".$u_id."')";
      mysqli_query($db_travel,$sql_query);

      $sql_query = "SELECT Plan_ID FROM Plan WHERE plan_name = '".$tb_name."'";
      $tb_id = mysqli_query($db_travel,$sql_query);
    }
    else
    {
      //Response
    }

    $countS = count($s_loc_name);
    $countF = count($f_loc_name);

    if($countS == 0)
    {
        $result_loc_s  = addLocation($s_loc_name);
    }

    if($countF == 0)
    {
        $result_loc_f  = addLocation($f_loc_name);
    }

    $sql_query_loc_s = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('".$tb_id."', '".$result_loc_s."','start')";
    mysqli_query($db_travel,$sql_query_loc_s);
    $sql_query_loc_f = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('".$tb_id."', '".$result_loc_f."', 'end')";
    mysqli_query($db_travel,$sql_query_loc_f);

    foreach ($w_loc_name as $selectedOption)
    {
        $countW = count($selectedOption);

        if($countW == 0)
        {
            $result_loc_w  = addLocation($selectedOption);
        }

        $sql_query_loc_w = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('".$tb_id."', '".$result_loc_w."', waypoint')";
        mysqli_query($db_travel,$sql_query_loc_w);
    }
}

mysqli_close($db_travel);

?>
