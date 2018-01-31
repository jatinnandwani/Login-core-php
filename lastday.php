
<?php 
include 'conection.php';
$sql1="SELECT * FROM login";
$result1= mysqli_query($conn,$sql1);

?>
<!DOCTYPE html>
<html>
<head>
	<title>fill the details</title>
</head>
<body>
	<h1>Fill all the details</h1>
	<form action="validation1.php" method="POST">
<lagend for="name">NAME:</lagend>
<input type="text" id="name" name="name">
<br>
<br>
<br>
<lagend for="empid">EMP ID:</lagend>
<input type="text" id="empid" name="empid">
<br>
<br>
<br>
<lagend for="email">E-mail id</lagend>
<input type="email" id="email" name="email">
<br>
<br>
<br>
<lagend for="address">ADDRESS:</lagend>
<input type="text" id="address" name="address">
<br>
<br>
<br>
<lagend for="pincode">PIN CODE:</lagend>
<input type="text" id="pincode" name="pincode">
<br> 
<button type="submit" value="sumbit" name="sumbit">click to add in database</button>

	</form>

	<table border=1 cellpadding="3" cellspacing="3">
		<tr><td>Name</td><td>Password</td></tr>
		<?php
		while($resultData=mysqli_fetch_assoc($result1))
		{
		echo "<tr><td>".$resultData['name']."</td><td>".$resultData['PASSWORD']."</td></tr>";

	}?>
	</table>

</body>
</html>