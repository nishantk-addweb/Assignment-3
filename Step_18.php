<!DOCTYPE html>
<html>
<body>

<?php

//Array column
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Nishant',
    'last_name' => 'K',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Bhavin',
    'last_name' => 'chavda',
  ),
  array(
    'id' => 3809,
    'first_name' => 'ajay',
    'last_name' => 'ahir',
  )
);

$last_names = array_column($a, 'last_name', 'id');
echo ("Array Column"); 
echo "<br>";
print_r($last_names);

//Array Filter 
function test_odd($var) 
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
echo ("Array Filter"); 
echo "<br>";
print_r(array_filter($a1,"test_odd"));
?>
</body>
</html>