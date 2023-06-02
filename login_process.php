<?php 
	session_start();
	header("Content-Type: text/html; charset=UTF-8");
	$conn = new mysqli('localhost', "root", "", "web");
	mysqli_query($conn,'SET NAMES utf8');
	$id = $_POST['id'];
	$password = $_POST['password'];
	//여기까진 join.php.와 동일
	//login.php에서 POST로 받은 id pw 변수에 저장
	//$conn 변수에 디비접근 정보넣기

	//쿼리문 작성 id pw변수가 있는지 검색
	$sql="SELECT * FROM member where id='$id'&&password='$password'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공
          #echo "사용자 아이디 $id";
          #echo "</br>로그인 성공";
        	$_SESSION['userid'] = $id;
        	echo "<script>location.href='index.php';</script>";
        }
        else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
			echo "<script>alert('ID나 비밀번호가 틀렸습니다!');location.href='login.php';</script>";
        }
	#$sql = "insert into member (id,nickname,password) values('$id', '$nickname', '$password')";
	#$res = $conn->query($sql);
	#echo "<script>location.href='index.html';</script>";

 ?>