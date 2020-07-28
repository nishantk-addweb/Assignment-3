<?php
//Step 15 : 
$config = require 'Step_15sec.php';


try {
  $conn = new PDO("$servername;dbname=mydata", $username, $password);
  // $conn = new PDO(
  // 			$config['server'],
  // 			$config['dbname'],
  // 			$config['username'],
  // 			$config['password'],
  // 		);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
