<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng Nhập</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <h1>Đăng Nhập</h1>
    <form action="login_process.php" method="post">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Mật khẩu:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Đăng Nhập</button>
    </form>
     <div class="center">
    <p>Chưa có tài khoản? <a href="register.php">Đăng Ký</a></p>
    <p>Quên mật khẩu? <a href="reset-password.php">Đặt lại mật khẩu</a></p>
    </div>
</body>
</html>
