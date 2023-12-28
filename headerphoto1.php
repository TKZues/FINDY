<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="./img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/findy-logo.png" type="image/x-icon">


    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar>div:nth-child(3) {
            border-bottom: 3px solid var(--main-color);
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="top">

        </div>
        <?php
            include "db_connection.php";

            $sql = "SELECT * FROM thongtintho WHERE id_tho = $id_tho";
            $result = $conn->query($sql);
            
            // Kiểm tra nếu có kết quả
            if ($result->num_rows > 0) {
                // Lặp qua từng dòng kết quả
                while ($row = $result->fetch_assoc()) {
                    // Lấy thông tin từ cột cần thiết
                    $hinhanhtho = $row['hinhanhtho'];
                
            
                    
                }
            } else {
                $hinhanhtho = "avatar.png";   

            }
           
        ?>
        <div class="grid wide">

            <!-- Navbar -->
            <nav class="navbar">
                <div class="navbar__logo">
                    <a href="./photologin.php" class="navbar__logo-link">
                        <img src="./img/findy-logo-ngang.png" alt="Findy" class="navbar__logo-img">
                    </a>
                </div>
                <div class="navbar__heading">
                    <a href="./mainphoto.php" class="navbar__heading-link">Tìm việc</a>
                </div>
                <div class="navbar__heading">
                    <a href="./profilephoto.php" class="navbar__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="navbar__heading">
                    <a href="./managerrequest.php" class="navbar__heading-link">Quản lý yêu cầu</a>
                </div>
                <div class="navbar__heading">
                    <a href="./manageroder.php" class="navbar__heading-link">Đơn hàng</a>
                </div>

                <div class="navbar__heading">
                    <img src="./img/<?php echo $hinhanhtho ?>" alt="" class="navbar__heading-img">
                    <a href="./accountphoto.php" class="navbar__heading-link">
                        <p><?php echo $hoTen; ?></p>
                    </a>
                    <div class="tabbar_title3-hover">

                        <div class="tabbar_title3-hover-container ">

                            <div class="infor_user row">
                                <div class="tabbar_title3-hover--avatar col c-2 m-2 l-2">
                                    <img src="./video/6478923415f073340ea91470_makeup.png" alt="">
                                </div>
                                <div class="tabbar_title3-hover--infor col c-10 m-10 l-10">

                                    <div class="title3--infor-produce ">
                                        <div name="Ten" class="tabbar_title3-hover--inforiname">

                                            Tên: <?php echo $hoTen; ?>

                                        </div>
                                        <div name="register" classs="tabbar_title3-hover--infor-ma">
                                            Mã ứng viên: <?php echo $id_tho ?>
                                        </div>
                                        <div name="mail" class="tabbar_title3-hover--infor-email">
                                            <!-- Gmail: <?php echo $email ?> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabbar_title3-hover--button">


                                <div>
                                    <a href="settinginfor.php">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-regular fa-clipboard c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Cài đặt thông tin cá nhân</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>


                                <div>
                                    <a href="#">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-regular fa-circle-up c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Nâng cấp tài khoản VIP</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-solid fa-pen c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Đăng tin tìm khách hàng</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-solid fa-gift c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Kích hoạt quà tặng</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-solid fa-gear c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Cài đặt gợi ý việc làm</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="./profilephoto.php">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-solid fa-id-badge c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Đăng tin profile</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="./seeprofile.php">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-regular fa-id-card c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Xem profile</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="./main.php">
                                        <div class="tabbar_title3-hover--button-settinginfor">
                                            <i class="fa-solid fa-arrow-right-from-bracket c-1 m-1 l-1"></i>
                                            <p class="c-10 m-10 l-10">Đăng xuất</p>
                                            <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <label for="mobile-bars-checkbox" class="navbar__mobile-bars">
                    <i class="navbar__heading-icon fa-solid fa-bars"></i>
                </label>
            </nav>
            <input type="checkbox" hidden id="mobile-bars-checkbox" class="navbar__bars-checkbox">

            <!-- Mobile menu -->
            <div class="mobile__menu">
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-circle-user"></i>
                    <a href="./account.html" class="mobile__heading-link">[Tên người dùng]</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                    <a href="./find-freelancer.html" class="mobile__heading-link">Thuê Thợ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                    <a href="" class="mobile__heading-link">Tìm việc</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-pen"></i>
                    <a href="./post-job.html" class="mobile__heading-link">Đăng tin</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                    <a href="./post-management.html" class="mobile__heading-link">Quản lý bài đăng</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-clipboard"></i>
                    <a href="./order-management.html" class="mobile__heading-link">Đơn hàng</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                    <a href="./order-management.html" class="mobile__heading-link">Đăng xuất</a>
                </div>
            </div>
        </div>
    </header>
</body>