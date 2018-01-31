
<?php 
include 'conection.php';
$sql2="SELECT * FROM login1";
$result1= mysqli_query($conn,$sql2);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>DATABASE OUTPUT</h1>
<table border=2 cellspacing="50">
		<tr><td>Name</td><td>Empid</td><td>Email</td><td>Address</td><td>pincode</td></tr>

		<?php
		while($resultData=mysqli_fetch_assoc($result1))
		{
		echo "<tr><td>".$resultData['name']."</td><td>".$resultData['empid']."</td><td>".$resultData['email']."</td><td>".$resultData['address']."</td><td>".$resultData['pincode']."</td></tr>";
			}?>
		</table>
</body>
</html>