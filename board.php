<?php
// 데이터베이스 연결 설정
$servername = "localhost";
$username = "사용자이름";
$password = "패스워드";
$dbname = "데이터베이스이름";

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 오류 확인
if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

// 게시물 목록 조회
$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);

// 게시물 목록 출력
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["title"] . "</h3>";
        echo "<p>" . $row["content"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "등록된 게시물이 없습니다.";
}

// 데이터베이스 연결 종료
$conn->close();
?>


