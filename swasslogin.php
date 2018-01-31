<?php
error_reporting(0);

include 'conection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>swass login</title>
</head>
<body>
	<h1>SWAAS LOGIN PAGE</h1>
	<form action="validation.php" method="POST">	
		<?php if($_GET['err'] ==1){
			echo "<span>Authentication failed!</span><br>";
		}
		?>
<lagend for="name">NAME:</lagend>
<input type="text" id="name" name="name">
<br>
<br>
<lagend for="pwd">PASSWORD:</lagend>
<input type="password" id="pwd" name="password">
<br>
<br>
<br>
<button type="submit" name="sumbit">SUBMIT</button>
<br>
<br>
</form>

</body>
</html>