<?php
$mysql_hostname = "118.139.173.1";
$mysql_user = "roza";
$mysql_password = "Shreeram@831";
$mysql_database = "roza";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>