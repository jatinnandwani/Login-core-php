<?php
 include_once 'conection.php';

$username= $_POST['name'];
$userpwd= $_POST['password'];

$sql="SELECT *FROM login WHERE name='$username' AND password='$userpwd'";
$result= mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck<1){
header ("location:http://localhost/swaas/swasslogin.php?err=1");
}
else
{
	
	header("location:http://localhost/swaas/lastday.php");
	
}
