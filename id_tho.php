<?php
    session_start();

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['id_tho']) || !isset($_SESSION['hoTen'])|| !isset($_SESSION['gmail'])) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập hoặc hiển thị thông báo lỗi
        header("Location: main.php");
        exit();
    }
    
    // Lấy thông tin người dùng từ session
    $id_tho = $_SESSION['id_tho'];
    $hoTen = $_SESSION['hoTen'];
?>