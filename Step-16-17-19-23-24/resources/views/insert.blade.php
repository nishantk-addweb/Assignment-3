<!DOCTYPE html>
<html>
<body>

<h2>Insert Details</h2>

<form action="insert" method="post">
	@csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  
  <label for="number">Number:</label><br>
  <input type="text" id="number" name="number"><br>

  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br><br>

  <input type="submit" value="Submit">


</form> 

</body>
</html>