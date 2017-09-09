<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $s_loc_name = $_POST['start'];
    $f_loc_name = $_POST['end'];
    $w_loc_name = $_POST['waypoints']

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

    /*$sql_query_p = "SELECT Plan_ID FROM Plan WHERE Plan_Name = '".$plan_name."'";
    $result_plan = mysqli_query($db_travel,$sql_query_p);*/

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

    $sql_query_loc_s = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('". ."', '".$result_loc_s."', 'start')";
    mysqli_query($db_travel,$sql_query_loc_s);
    $sql_query_loc_f = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('". ."', '".$result_loc_f."', 'end')";
    mysqli_query($db_travel,$sql_query_loc_f);

    foreach ($w_loc_name as $selectedOption)
    {
        $countW = count($selectedOption);

        if($count == 0)
        {
            $result_loc_w  = addLocation($selectedOption);
        }

        $sql_query_loc_w = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('". ."', '".$result_loc_w."', waypoint')";
        mysqli_query($db_travel,$sql_query_loc_w);
    }
}

mysqli_close($db_travel);

?>
