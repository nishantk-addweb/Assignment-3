<?php
$age = $_POST['age'];
//echo "ldlfjsdlfjlsdjf";

class a{

function agecheck($age){
	if($age>=21){
		echo "Welcome to the Night Club";
	}else{
		echo "You are not allowed to the club";
	}
}
}
$obj = new a;
$obj->agecheck($age = $_POST['age']); 
?>