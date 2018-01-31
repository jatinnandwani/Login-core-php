<?php
include 'conection.php';

$uname= $_POST['name'];
$uempid= $_POST['empid'];
$umail= $_POST['email'];
$uaddress= $_POST['address'];
$upincode= $_POST['pincode'];


$sql="INSERT INTO login1 (name,empid,email,address,pincode) VALUES ('$uname','$uempid','$umail','$uaddress','$upincode')";
mysqli_query($conn,$sql);

header("location:http://localhost/swaas/show.php");
?>