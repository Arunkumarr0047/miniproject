<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hospital";

// Create connection
$conn=new mysqli($servername, $username, $password,$db);

// Check connection
if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
echo "Connected successfully";
}
?>