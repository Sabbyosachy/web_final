<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName="susan_db";

// Create connection
$conn =mysqli_connect($serverName, $userName, $password,$dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}

else
{
    echo "<script>alert('Connected successfully')</script>";
}
?>