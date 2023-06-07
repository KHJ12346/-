<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>주문관리페이지</title>
</head>
<body>
<?php 
	$conn = new mysqli('localhost', "root", "", "web");
	$sql = "SELECT * FROM ordered;";
	$result = mysqli_query( $conn, $sql );
	echo '<form action="delete_order.php" method="post">';
	while( $row = mysqli_fetch_array( $result ) ) {
		echo '
		<input type="hidden" name="order_num" value="'.$row["order_num"].'">
		아이디: '.$row["id"].'
		이름: '.$row["p_name"].'
		주소: '.$row["address"].'
		휴대폰: '.$row["phone"].'
		주문번호: '.$row["order_num"].'
		</input>
 		<input type="submit" value="배송완료"/>
 		<br>
		';
		

	}

 ?>

</body>
</html>

