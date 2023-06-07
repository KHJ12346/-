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
		$sql = "SELECT * FROM basket where id='$userid';";
		$result = mysqli_query( $conn, $sql );

		$sum_price = 0;
		
		if($result == "")
		{
			echo "<h1>장바구니 담은거 없음</h1>";
		}
		else
		{
			echo '
  			<script>
			function itemSum(frm)
			{
			   var sum = 0;
			   var count = document.forms["basket"]["p_name[]"].length;
			   for(var i=0; i < count; i++ ){
			       if( document.forms["basket"]["p_name[]"][i].checked == true ){
				    sum += parseInt(document.forms["basket"]["p_price[]"][i].value);
			       }
			   }
			   frm.total_sum.value = sum;
			}
			if(document.getElementById("input_check").checked){document.getElementById("input_check_hidden").disabled=false;}

			
			</script>
			<form name="basket" action="purchase.php" method="get">
			';
			while( $row = mysqli_fetch_array( $result ) ) {
				$p_name = $row["p_name"];
				
				$sql = "SELECT * FROM product where p_name='$p_name';";
				$result2 = mysqli_query( $conn, $sql );
				$row2 = mysqli_fetch_array( $result2 );
				$p_price = $row2["p_price"];
				$sum_price = $sum_price + $p_price;
				  echo '
			<input type="checkbox" name="p_name[]" value="'.$p_name.'" onClick="itemSum(this.form);" id = "input_check">'.$p_name.'
			<input type="hidden" name="p_price[]" value="'.$p_price.'" id="input_check_hidden"/>$'.$p_price.'
			
			

				<br>';
				}
			echo '
			합계:&nbsp$;<input name="total_sum" type="text" size="20" readonly><br>
			<br><input type="submit" value="구매하기"></form>
			';
		}

	
	} else{
		echo "<script>alert('로그인 후 이용바랍니다.');location.href='login.php';</script>";
	}




 ?>

</body>
</html>



