<?php 
//Step 7 : Associative Arrrays

$array = array(
[
	'Title' => 'php', 
	'Due' => 'Next Monday', 
	'Assigned to' => 'Nishant', 
	'Completed' => 'Yes', 
],
[
	'Title' => 'php', 
	'Due' => 'Next Monday', 
	'Assigned to' => 'Nishant', 
	'Completed' => 'Yes', 
]);

?>

<!DOCTYPE html>
<html>
<head>
<title>Step 7</title>
</head>

<body>
<?php
foreach($array as $task){
	foreach ($task as $key => $value) {
		echo "<li><strong>$key : $value</strong></li>";
	}
	echo "<br>";
	echo "<br>";
}
?>
</body>

</html>


