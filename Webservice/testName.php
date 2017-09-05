<?php
include('config.php');
// get the q parameter from URL
$q = $_REQUEST["name"];
$sql="SELECT user_username FROM users";
$result = mysqli_query($db_travel,$sql);

$arr = array();

while($row = mysqli_fetch_array($result))
{
    $arr[] = $row['user_username'];
}

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($arr as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name. "";
            } else {
                $hint .= ", $name";
            }
        }
    }

}

echo $hint === "" ? "User name is not in use" : $hint." is in use.";
mysqli_close($db_travel);
?> 