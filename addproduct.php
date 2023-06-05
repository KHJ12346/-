<?php 
	$file1_dir = "C:/xampp/htdocs/gitweb/-/image/";
	$file2_dir = "C:/xampp/htdocs/gitweb/-/detail page/image/";
	$file_path1 = $file1_dir.$_FILES['p_image1']["name"];
	$file_path2 = $file1_dir.$_FILES['p_image1']["name"];
	move_uploaded_file($_FILES["p_image1"]["tmp_name"], $file_path1);
	move_uploaded_file($_FILES["p_image2"]["tmp_name"], $file_path2);

	$p_name = $_POST['p_name'];
	$p_price = $_POST['p_price'];

	$conn = new mysqli('localhost', "root", "", "web");
	$sql = "INSERT INTO product (p_name,p_price) VALUES('$p_name', '$p_price');";
	$res = $conn->query($sql);

	echo "<script>alert('상품 추가완료!');location.href='index.php';</script>";
 ?>
