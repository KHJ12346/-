<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	session_start();
	if(isset($_SESSION['userid'])){
		$userid = $_SESSION['userid'];

		$conn = new mysqli('localhost', "root", "", "web");
		$sql = "SELECT * FROM basket where id='scg123';";
		$result = mysqli_query( $conn, $sql );
		#$res = $conn->query($sql);

		while( $row = mysqli_fetch_array( $result ) ) {
			$a = $row["id"];
			$b = $row["p_name"];
			  echo '
			    	<form action="/-/purchase.php" method="get">
		<input type="checkbox" name="product[]" value="'.$a.'" checked>
		<input type="checkbox" name="product[]" value="'.$b.'" checked>'.$b.'</input>
			<br>';
			}
		echo '		<input type="submit" value="구매하기"></form>';

	
	} else{
		echo "<script>alert('로그인 후 이용바랍니다.');location.href='login.php';</script>";
	}


 ?>
</body>
</html>



