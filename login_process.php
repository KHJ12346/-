<?php
// DB연결정보
$host = "localhost";
$id = "root";
$password = "";
$dbname = "web";
// 데이터베이스 연결
$conn = mysqli_connect($host, $id, $password, $dbname);
// DB연결상태확인
if (!$conn) {
    die("DB연결 실패" . mysqli_connect_error());
}
//로그인 창에서 입력 ID PW 가져옴
$id = $_POST["id"];
$password = $_POST["password"];
//데이터베이스에서 사용자 이름과 비밀번호를 확인
$sql = "SELECT * FROM member WHERE id='$id' AND password='$password'";
// result 값은 해당 함수에서 sql문이 실행됐을때 반환되는 레코드 갯수 정수값이 반환됨. ex) 만족하는 레코드가 하나면 1반환
$result = mysqli_query($conn, $sql);
// 만약 레코드 수가 1보다 크면
if (mysqli_num_rows($result) > 0) {
    //로그인 성공 알림 출력
    echo "로그인 성공!";
} else {
   //만족하는 레코드 없으면 실패 알림 출력
    echo "로그인 실패: 사용자 이름 또는 비밀번호가 올바르지 않습니다.";
}
//db 연결 종료
mysqli_close($conn);
?>