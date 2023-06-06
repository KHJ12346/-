<?php
	session_start();
  $p_name = $_GET['p_name'];
  #$p_price = $_GET['p_price'];
  $conn = new mysqli('localhost', "root", "", "web");


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
	<form action="order.php" method="get">
		주소: <input type="text" name="address"/><br>
		휴대폰 번호: <input type="text" name="phone"/>
	<?php
	$p_names=array();
	$p_prices=array();
	$sum=0;

	$num=0;
	foreach ($p_name as $value) {
		$p_names[$num] = $value;


		$sql = "SELECT * FROM product where p_name='$value';";
		$result2 = mysqli_query( $conn, $sql );
		$row = mysqli_fetch_array( $result2 );
		$p_prices[$num] = $row["p_price"];
		$sum = $sum + $row["p_price"];

		$num = $num + 1;
	}


	$num=0;
	foreach ($p_name as $value) {
	echo '
	<h1>'.$p_names[$num].' $'.$p_prices[$num].'</h1>
	';
	$num = $num + 1;
	}
	echo '합계: $'.$sum;

	$_SESSION['p_names'] = $p_names;

	 ?><br>
	 <input type="submit" value="구매완료"/>
	</form>
</body>
</html>