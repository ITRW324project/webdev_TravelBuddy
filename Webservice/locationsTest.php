<?php
    include('config.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") 
//{
    $s_loc_name = $_POST['start'];
    $f_loc_name = $_POST['end'];
    $w_loc_name = $_POST['waypoints'];
    $tb_name = $_POST['newTB'];
    $u_name = $_POST['user'];

    $temp = explode('=', $u_name, 2);
    $u_name = $temp[1];

    //echo $w_loc_name;
    
    //$jsonData .= json_encode($w_loc_name);
    //echo $jsonData;

    $response = array();

    function counter($name)
    {
        global $db_travel;
        $sql_query = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$name."'";
        $result_loc = mysqli_query($db_travel,$sql_query);
        $row = mysqli_fetch_array($resultt_loc,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result_loc);
        return $count;
    }

    function addLocation($name)
    {
        global $db_travel;
        $sql_query_loc = "INSERT INTO Locations (Loc_Name) VALUES ('".$name."')";
        mysqli_query($db_travel,$sql_query_loc);

        $sql_query = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$name."'";
        $result_loc = mysqli_query($db_travel,$sql_query);

        return $result_loc;
    }

    function locationID($name)
    {
        $sql_query = "SELECT Loc_ID FROM Locations WHERE Loc_Name = '".$name."'";
        $result_loc = mysqli_query($db_travel,$sql_query);

        return $result_loc;
    }

    function addToPlan_Loc($tb, $loc, $seq)
    {
        global $db_travel;
        $sql_query = "INSERT INTO Plan_Loc (Plan_ID, Loc_ID, Seq_Value) VALUES ('".$tb."','".$loc."','".$seq."')";
        mysqli_query($db_travel,$sql_query);
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
        $sql_query = "INSERT INTO Plan (LPlan_Name, User_ID) VALUES ('".$tb_name."','".$u_id."')";
        mysqli_query($db_travel,$sql_query);

        $sql_query = "SELECT Plan_ID FROM Plan WHERE Plan_Name = '".$tb_name."'";
        $tb_id = mysqli_query($db_travel,$sql_query);

        $response["result"] = "New plan successfully created!";
        $response["success"] = true;
    }
    else
    {
        $response["result"] = "Plan for user already exists!";
        $response["success"] = false;
        echo $response;
    }

    $countS = count($s_loc_name);
    $countF = count($f_loc_name);

    if($countS == 0)
    {
         $result_loc_s = addLocation($s_loc_name);
         addToPlan_Loc($tb_id, $result_loc_s, 'start');
         $response["result"] .= "New starting location added!";
         $response["success"] = true;
    }
    else
    {
        $loc_id = locationID($s_loc_name);
        addToPlan_Loc($tb_id, $loc_id, 'start');
        $response["result"] .= "Starting location already exists!";
        $response["success"] = true;
    }

    if($countF == 0)
    {
        $result_loc_f = addLocation($f_loc_name);
        addToPlan_Loc($tb_id, $result_loc_f, 'end');
        $response["result"] .= "Final location added!";
        $response["success"] = true;
    }
    else
    {
        $loc_id = locationID($f_loc_name);
        addToPlan_Loc($tb_id, $loc_id, 'end');
        $response["result"] .= "Final location already exists!";
        $response["success"] = true;
    }

    foreach ($w_loc_name as $selectedOption => $waypoint) 
    {
        $countW = count($waypoint);

        if($countW == 0)
        {
            $result_loc_w = addLocation($waypoint);
            addToPlan_Loc($tb_id, $waypoint, 'waypoint');
            $response["result"] .= "Waypoint location added!";
            $response["success"] = true;
        }
        else
        {
            $loc_id = locationID($waypoint);
            addToPlan_Loc($tb_id, $loc_id, 'waypoint');
            $response["result"] .= "Waypoint already exists!";
            $response["success"] = true;
        }
    }

    echo $response;
//}

mysqli_close($db_travel);

?>