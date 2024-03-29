<?php

define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"saleh_al_saleh");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
   echo "<h3 class=container bg-dark text-center p-3 text-warning rounded-lg mt-5>Not able establish database Connection</h3>";
}


?>