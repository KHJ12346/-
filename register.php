<!DOCTYPE html>
<html>
<head>
    <title>회원가입</title>
</head>
<body>
    <h1>회원가입</h1>
    <form action="register_process.php" method="post">
        <label for="username">사용자 이름:</label>
        <input type="text" name="username" required><br>
        <label for="password">비밀번호:</label>
        <input type="password" name="password" required><br>
        <label for="email">이메일:</label>
        <input type="email" name="email" required><br>
        <input type="submit" value="회원가입">
    </form>
</body>
</html>