<!DOCTYPE html>
<html>
<head>
    <title>로그인</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
   
   body {
       background-color: #f2f2f2;
   }
   .container {
       margin-top: 100px;
       max-width: 500px;
       background-color: #fff;
       padding: 30px;
       border-radius: 5px;
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
   }
   h1 {
       text-align: center;
       margin-bottom: 30px;
   }
   form {
       margin-bottom: 20px;
   }
   label {
       font-weight: bold;
   }
   input[type="text"],
   input[type="password"] {
       width: 100%;
       padding: 12px 20px;
       margin: 8px 0;
       box-sizing: border-box;
       border: 2px solid #ccc;
       border-radius: 4px;
       font-size: 16px;
   }
   input[type="submit"] {
       background-color: #4CAF50;
       color: white;
       padding: 12px 20px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
       font-size: 16px;
   }
   input[type="submit"]:hover {
       background-color: #45a049;
   }
   .signup-btn {
       background-color: #2c3e50;
       color: white;
       padding: 12px 20px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
       font-size: 16px;
       margin-left: 10px;
   }
   .signup-btn:hover {
       background-color: #34495e;
   }
</style>
    
</head>
<body>
    <div class="container">
        <h1>로그인</h1>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="username">ID:</label>
                <input type="text" class="form-control" name="id" required>
            </div>
            <div class="form-group">
                <label for="password">비밀번호:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <input type="submit" class="btn btn-primary" value="로그인">
            <button type="button" class="signup-btn" onclick="location.href='join.html'">회원가입</button>
        </form>
    </div>
</body>
</html>