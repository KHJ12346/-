<?php
  $name1 = $_GET['name'];
  #$name2 = $_GET['name2'];
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
	foreach ($name1 as $value) {
		echo $value;
	}
		
	 ?><br>
</body>
</html>