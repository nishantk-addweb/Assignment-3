<?php
// Step 13 : Intro to PDO
$servername = "localhost";
$username = "root";
$password = "";

try {
	//connection with PDO
  $pdo = new PDO("mysql:host=$servername;dbname=mydata", $username, $password);
  //check connection
  
  echo "Connected successfully";
} catch(PDOException $err) {
  echo "Connection failed: " . $err->getMessage();
}
?>