<?php 
$a = "xxx";
$b = "yyy";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		echo '<form action="test2.php" method="get">
		<input type="checkbox" name="name[]" value="'.$a.'" checked>
		<input type="checkbox" name="name[]" value="yyy" checked>
		<input type="submit" value="Submit">
	</form>';
	 ?>

</body>
</html>