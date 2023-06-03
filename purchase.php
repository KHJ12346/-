<?php
  $product = $_GET['product'];
  #$name2 = $_GET['name2'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>구매페이지</title>
</head>
<body>
	<h1>구매페이지</h1>
	<?php
	foreach ($product as $value) {
		echo $value."<br>";
	}
		
	 ?><br>
</body>
</html>