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

// 게시판 글 작성 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    // 데이터베이스에 게시판 글 삽입
    $sql = "INSERT INTO board (name, password, title, content) VALUES ('$name', '$password', '$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "게시판 글이 성공적으로 작성되었습니다.";
    } else {
        echo "게시판 글 작성 중 오류가 발생했습니다: " . $conn->error;
    }
}

// 게시판 글 조회
$sql = "SELECT * FROM board ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // 각 글의 정보 출력
        echo "제목: " . $row["title"] . "<br>";
        echo "작성자: " . $row["name"] . "<br>";
        echo "내용: " . $row["content"] . "<br><br>";
    }
} else {
    echo "등록된 글이 없습니다.";
}

// 데이터베이스 연결 종료
$conn->close();
?>