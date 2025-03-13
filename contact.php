<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Liên Hệ</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
    <h1>Liên Hệ</h1>
    <form action="contact_process.php" method="post">
        <label>Họ Tên:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Chủ Đề:</label>
        <input type="text" name="subject" required><br>
        <label>Nội Dung:</label>
        <textarea name="message" required></textarea><br>
        <button type="submit">Gửi</button>
    </form>
</body>
</html> 