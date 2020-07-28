<?php
//Step 9 : Conditionals

$task = array(
	'Title' => 'php', 
	'Due' => 'Next Monday', 
	'Assigned to' => 'Nishant', 
	'Completed' => 0, 
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Step 9</title>
</head>

<body>
<?php

// print_r($task['Completed']);
// die;
if(!$task['Completed']){
		echo "it's not Completed";
	} else{
		echo "it's  Completed";
	}
?>
</body>

</html>
