<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng Ký</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <h1>Đăng Ký</h1>
    <form action="register_process.php" method="post">
        <label>Họ Tên:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Mật khẩu:</label>
        <input type="password" name="password" required><br>
        <label>Xác nhận mật khẩu:</label>
        <input type="password" name="confirm_password" required><br>
        <button type="submit">Đăng Ký</button>
    </form>
    <p>Đã có tài khoản? <a href="login.php">Đăng Nhập</a></p>
</body>
</html>
