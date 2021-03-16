<?php
// $db_host = "localhost";
// $db_admin = "root";
// $db_pass = "bhavik0116";
// $db_name = "GoTrip";
// $db_port = "3306";

$db_host = "localhost";
$db_admin = "root";
$db_pass = "1186";
$db_name = "GoTrip";
$db_port = "3306";

$conn = new mysqli($db_host, $db_admin, $db_pass, $db_name) or die("Unable to connect");


// if ($conn->connect_error) {
//     die("Connection Failed");
// } else {
//     echo "Connected";
// }
