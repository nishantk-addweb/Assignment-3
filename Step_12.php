<?php
//Step 12 : Classes

class a {
	function __construct(){
		echo "constructor called";
	}
	public function first($name){
		echo "first method called";
		echo $name;
	}
}
$obj = new a();
$obj->first('Apple');
?>