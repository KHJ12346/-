<?php 
	header("Content-Type: text/html; charset=UTF-8");
	$conn = new mysqli('localhost', "root", "", "web");
	mysqli_query($conn,'SET NAMES utf8');
	$id = $_POST['id'];
	$nickname = $_POST['nickname'];
	$password = $_POST['password'];
	$sql = "SELECT id FROM member WHERE id='$id'";
	$res = mysqli_query($conn, $sql);
	if(mysqli_num_rows($res) > 0) { // 이미 존재하는 아이디인 경우
		echo "<script>alert('회원가입 실패! 동일한 아이디가 존재합니다.');</script>";
		echo "<script>location.href='join.html';</script>";
	} else { // 존재하지 않는 아이디인 경우 회원가입 진행
		$sql = "INSERT INTO member (id,nickname,password) VALUES('$id', '$nickname', '$password')";
		$res = $conn->query($sql);
		echo "<script>alert('회원가입 완료!');</script>";
		echo "<script>location.href='index.php';</script>";
	}
 ?>






