<?php

// define('DB_SERVER', "localhost");
// define('DB_USERNAME', "root");
// define('DB_PASSWORD', "");
// define('DB_DATABASE', "saleh_al_saleh");

define('DB_SERVER', "localhost");
define('DB_USERNAME', "ruknam5_saleh");
define('DB_PASSWORD', "Salehalsaleh@12345");
define('DB_DATABASE', "ruknam5_saleh");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("COnnection Failed: " . mysqli_connect_errno());
}
