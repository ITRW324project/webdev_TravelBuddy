<?php
setcookie("UserName", "", time() - (7200), "/" ,"simeon.ddns.net");
header("Location: http://simeon.ddns.net:8085/travelappbuddy/home.html");
?>