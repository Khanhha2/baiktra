<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang Chủ</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <header>
        <img src="logo.png" alt="Logo" style="float:left;">
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="about.php">Giới Thiệu</a></li>
                <li><a href="contact.php">Liên Hệ</a></li>
                <li><a href="<?php echo isset($_SESSION['user']) ? 'logout.php' : 'login.php'; ?>">
                    <?php echo isset($_SESSION['user']) ? 'Đăng Xuất' : 'Đăng Nhập'; ?>
                </a></li>
            </ul>
        </nav>
    </header>
    <h1 class="center">Chào mừng đến với trang quản lý sản phẩm</h1>
    <div class="center">
    <a href="register.php">Đăng Ký</a>
    <a href="login.php">Đăng Nhập</a>
    <footer>
        <p>&copy; 2025 Quản lý sản phẩm</p>
    </footer>
       </div>
</body>
</html>
