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
    <title>Danh Sách Sản Phẩm</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <h1>Danh Sách Sản Phẩm</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hành Động</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Sản phẩm A</td>
            <td>100,000 VND</td>
            <td>
                <a href="update.php?id=1">Sửa</a>
                <a href="delete.php?id=1">Xóa</a>
            </td>
        </tr>
    </table>
    <a href="create.php">Thêm Sản Phẩm</a>
</body>
</html>
