<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    $s_loc_name = $_GET['start'];
    $f_loc_name = $_GET['end'];

    $sql_query_start = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$s_loc_name."'";
    $result_loc_s = mysqli_query($db_travel,$sql_query_start);
    $row = mysqli_fetch_array($result_loc,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result_loc);

    //$sql_query_p = "SELECT Plan_ID FROM Plan WHERE Plan_Name = '".$plan_name."'";
    //$result_plan = mysqli_query($db_travel,$sql_query_p);

    if($count == 0)
    {
        $sql_query_loc = "INSERT INTO 'Locations' ('Loc_Name') VALUES ('".$s_loc_name."')";
        mysqli_query($db_travel,$sql_query_loc);

        $sql_query_start = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$s_loc_name."'";
        $result_loc_s = mysqli_query($db_travel,$sql_query_start);
    }

    $sql_query_loc_id = "INSERT INTO 'Plan_Loc' ('Loc_ID') VALUES ('".$result_loc."')";
    ysqli_query($db_travel,$sql_query_loc_id);

    //$sql_query_plan_id = "INSERT INTO 'Plan_Loc' ('Plan_ID') VALUES ('".$result_plan."')";
    //mysqli_query($db_travel,$sql_query_plan_id);
}

mysqli_close($db_travel);

?>
