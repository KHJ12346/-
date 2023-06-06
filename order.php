<?php 
	session_start();

	$id = $_SESSION['userid'];
	$conn = new mysqli('localhost', "root", "", "web");
	$p_names = $_SESSION['p_names'];
	$address = $_GET['address'];
	$phone = $_GET['phone'];

	foreach ($p_names as $value) {
		$sql = "INSERT INTO ordered values('$id', '$value', '$address', '$phone');";
		$res = mysqli_query( $conn, $sql );
	}


	echo '<script>alert("구매 완료!");</script>';
	echo "<script>location.href='index.php';</script>";
 ?>