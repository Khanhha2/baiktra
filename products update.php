<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit();
}


$product = [
    'id' => 1,
    'name' => 'Sản phẩm A',
    'price' => 100000,
    'description' => 'Mô tả sản phẩm A'
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cập Nhật Sản Phẩm</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <h1>Cập Nhật Sản Phẩm</h1>
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <label>Tên sản phẩm:</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
        <label>Giá:</label>
        <input type="number" name="price" value="<?php echo $product['price']; ?>" required><br>
        <label>Mô tả:</label>
        <textarea name="description" required><?php echo $product['description']; ?></textarea><br>
        <button type="submit">Cập Nhật</button>
    </form>
    <a href="index.php">Quay lại</a>
</body>
</html>
