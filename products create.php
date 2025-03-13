<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thêm Sản Phẩm</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <h1>Thêm Sản Phẩm</h1>
    <form action="create_process.php" method="post">
        <label>Tên sản phẩm:</label>
        <input type="text" name="name" required><br>
        <label>Giá:</label>
        <input type="number" name="price" required><br>
        <label>Mô tả:</label>
        <textarea name="description" required></textarea><br>
        <button type="submit">Thêm</button>
    </form>
    <a href="index.php">Quay lại</a>
</body>
</html>
