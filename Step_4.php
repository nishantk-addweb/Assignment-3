<!-- Step 4 : PHP and HTML -->

<!DOCTYPE html>
<html>
<head>
<title>Step 4</title>
</head>

<body>
<?php 
	// http://localhost/nishant/Step_4.php/?name=nishant&number=12345

	$name = $_GET['name'];
	$number = $_GET['number'];

	echo "Name : " . htmlspecialchars($name). "<br>";
	echo "Number : " . htmlspecialchars($number);
?>
</body>

</html>


