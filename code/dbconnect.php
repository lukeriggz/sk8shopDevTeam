<?php
//server name must be changed to cPanel name
$servername = "localhost";
$username = "DBuser1";
$password = "CSIT555password";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>