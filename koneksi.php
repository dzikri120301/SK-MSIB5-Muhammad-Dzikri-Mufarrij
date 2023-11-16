<?php
$hostName = "127.0.0.1";    // LOCALHOST
$userName = "root";         // username database
$password = "";             // blank
$dbName   = "penjualan_sepatu"; // nama database
$conn = mysqli_connect($hostName, $userName, $password,$dbName);    // Session Connection
if ($conn->connect_errno) {
    die("Connection failed: " . $con->connect_error);
} else {
    //echo "Connection successful";
}


?>