<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <h1>Chào mừng, <?php echo $_SESSION['user']; ?>!</h1>
    <p>Tổng quan hệ thống:</p>
    <ul>
        <li>Sản phẩm: 100</li>
        <li>Người dùng: 50</li>
        <li>Đơn hàng: 200</li>
    </ul>
    <a href="products index.php">Quản lý Sản Phẩm</a>
    <a href="logout.php">Đăng Xuất</a>
</body>
</html>
