<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";

// Create database
$sql = "CREATE DATABASE mydata";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully"."<br>";
} else {
  echo "Error creating database: " ."<br>". $conn->error;
}



$conn->close();

?>