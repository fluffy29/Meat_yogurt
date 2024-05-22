<?php

$hostname = "localhost"; // Replace with your actual hostname
$username = "root";
$password = "Acsdoha2023!";
$dbname = "Meat_yogurt";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Execute your database queries here

mysqli_close($conn);
