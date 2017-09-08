<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $s_loc_name = $_POST['start'];
    $f_loc_name = $_POST['end'];
    $w_loc_name = $_POST['waypoints']

    $sql_query_start = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$s_loc_name."'";
    $result_loc_s = mysqli_query($db_travel,$sql_query_start);
    $row = mysqli_fetch_array($result_loc_s,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result_loc_s);

    //$sql_query_p = "SELECT Plan_ID FROM Plan WHERE Plan_Name = '".$plan_name."'";
    //$result_plan = mysqli_query($db_travel,$sql_query_p);

    if($count == 0)
    {
        $sql_query_loc = "INSERT INTO Locations (Loc_Name) VALUES ('".$s_loc_name."')";
        mysqli_query($db_travel,$sql_query_loc);

        $sql_query_start = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$s_loc_name."'";
        $result_loc_s = mysqli_query($db_travel,$sql_query_start);
    }

    $sql_query_end = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$f_loc_name."'";
    $result_loc_f = mysqli_query($db_travel,$sql_query_end);
    $row = mysqli_fetch_array($result_loc_f,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result_loc_f);

    if($count == 0)
    {
        $sql_query_loc = "INSERT INTO Locations (Loc_Name) VALUES ('".$f_loc_name."')";
        mysqli_query($db_travel,$sql_query_loc);

        $sql_query_end = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$f_loc_name."'";
        $result_loc_f = mysqli_query($db_travel,$sql_query_end);
    }

    $sql_query_loc_s = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('". ."', '".$result_loc_s."', '".'start'."')";
    mysqli_query($db_travel,$sql_query_loc_s);
    $sql_query_loc_f = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('". ."', '".$result_loc_f."', '".'end'."')";
    mysqli_query($db_travel,$sql_query_loc_f);

    foreach ($w_loc_name as $selectedOption)
    {
        $sql_query_way = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$selectedOption."'";
        $result_loc_w = mysqli_query($db_travel,$sql_query_way);
        $row = mysqli_fetch_array($result_loc_w,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result_loc_w);

        if($count == 0)
        {
            $sql_query_loc = "INSERT INTO Locations (Loc_Name) VALUES ('".$selectedOption."')";
            mysqli_query($db_travel,$sql_query_loc);

            $sql_query_way = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$selectedOption."'";
            $result_loc_way = mysqli_query($db_travel,$sql_query_way);
        }

        $sql_query_loc_w = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('". ."', '".$result_loc_way."', '".'waypoint'."')";
        mysqli_query($db_travel,$sql_query_loc_w);
    }
}

mysqli_close($db_travel);

?>
