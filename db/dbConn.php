<?php
$hostName = "localhost"; // host name
// $username = "u686008480_zakerAdmin";  // database username
$username = "root";  // database username
$password = ""; // database password
$databaseName = "zaker"; // database name
// $password = "zakerAdmin@12345"; // database password
// $databaseName = "u686008480_zakerDB"; // database name

$connection = new mysqli($hostName,$username,$password,$databaseName);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
