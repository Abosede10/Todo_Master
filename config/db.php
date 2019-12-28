<?php
// CREATING CONNECTION TO THE DATABASE
$localhost = "localhost";
$username = "root";
$password = "";
$dName = "todo_master";

// Create connection
$connection = new mysqli($localhost, $username, $password, $dName);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";



?>