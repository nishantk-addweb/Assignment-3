<?php
class first{
	public function getvalue(){
		$server = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'mydata';
		$conn = new mysqli($server,$user,$pass,$db);
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}
			echo "Connected successfully";
	}
}

class second{
	public $value2= '';
	function __construct(first $class1){
		$this->value2=$class1->getvalue();
	}
}

$obj = new first();
$obj2 = new second($obj);
echo $obj2->value2;
?>