<?php

// 데이터베이스 연결 정보
$host = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// 데이터베이스 연결
$conn = mysqli_connect($host, $username, $password, $dbname);

// 오류가 발생했는지 확인
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 회원가입 폼에서 전송된 데이터를 가져옴
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

// 중복된 사용자 이름이 있는지 확인
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    die("이미 사용중인 사용자 이름입니다.");
}

// 데이터베이스에 새로운 회원 정보를 추가
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "회원가입이 완료되었습니다.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// 데이터베이스 연결 종료
mysqli_close($conn);

?>