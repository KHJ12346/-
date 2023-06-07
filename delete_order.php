<?php 
	$order_num = $_POST['order_num'];
	$conn = new mysqli('localhost', "root", "", "web");
	$sql = "DELETE FROM ordered WHERE order_num='$order_num';";
	$result = mysqli_query( $conn, $sql );
	echo $order_num;

	echo "<script>alert('처리 되었습니다.');location.href='ordered.php';</script>";

 ?>