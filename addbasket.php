<?php

	session_start();
	if(isset($_SESSION['userid'])){
		$userid = $_SESSION['userid'];
		$product = $_SESSION['product'];

		$conn = new mysqli('localhost', "root", "", "web");
		$sql = "INSERT INTO basket (id,p_name) VALUES('$userid', '$product');";
		$res = $conn->query($sql);

		echo "<script>alert('장바구니 추가완료!');location.href='detail page/상품상세페이지.php?product=$product';</script>";

		
	} else{
		echo "<script>alert('로그인 후 이용바랍니다.');location.href='login.php';</script>";


	}
	
 ?>