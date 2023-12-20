<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/findy-logo.png" sizes="8x8">
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY</title>
</head>

<body>
    <header class="header">
        <div class="top">

        </div>
        <div class="grid wide">

            <!-- Navbar -->
            <nav class="navbar">
                <div class="navbar__logo">
                    <a href="./customersignin.php" class="navbar__logo-link">
                        <img src="./img/findy-logo-1.jpg" alt="Findy" class="navbar__logo-img">
                    </a>
                </div>
                <div class="navbar__heading">
                    <a href="./find-timtho.php" class="navbar__heading-link">Thuê thợ</a>
                </div>
                <div class="navbar__heading">
                    <a href="./post-job.php" class="navbar__heading-link">Đăng tin</a>
                </div>
                <div class="navbar__heading">
                    <a href="./post-management.php" class="navbar__heading-link">Quản lý bài đăng</a>
                </div>
                <div class="navbar__heading">
                    <a href="./order-management.php" class="navbar__heading-link">Đơn hàng</a>
                </div>

                <div class="navbar__heading">
                    <img src="./img/avatar-16.png" alt="">
                    <a href="./account.php" class="navbar__heading-link"><?php echo $hoTen; ?></a>
                    <!-- <div class="tabbar_title3-hover">
                                    
                                    <div class="tabbar_title3-hover-container ">

                                        <div class="infor_user row">
                                            <div class="tabbar_title3-hover--avatar col c-2 m-2 l-2">
                                                
                                            </div>
                                            <div class="tabbar_title3-hover--infor col c-10 m-10 l-10">
                                                
                                                <div class="title3--infor-produce ">
                                                    <div name="Ten" class="tabbar_title3-hover--inforiname">
                                                       
                                                        
                                                    </div>
                                                    <div name="register" class="tabbar_title3-hover--infor-ma">
                                                        
                                                    </div>
                                                    <div name="mail" class="tabbar_title3-hover--infor-email">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabbar_title3-hover--button">
                                       
                                        
                                            <div >
                                                <a href="settinginfor.php" >
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
                                                <a href="./profilephoto.php" >
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-solid fa-id-badge c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Đăng tin profile</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div >
                                                <a href="./seeprofile.php" >
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                    <i class="fa-regular fa-id-card c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Xem profile</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div >
                                                <a href="./main.php" >
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-solid fa-arrow-right-from-bracket c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Đăng xuất</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                      </div>
                                   
                                </div> -->

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
                    <a href="./account.php" class="mobile__heading-link">[Tên người dùng]</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                    <a href="./find-freelancer.php" class="mobile__heading-link">Thuê Thợ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                    <a href="" class="mobile__heading-link">Tìm việc</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-pen"></i>
                    <a href="./post-job.php" class="mobile__heading-link">Đăng tin</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                    <a href="./post-management.php" class="mobile__heading-link">Quản lý bài đăng</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-clipboard"></i>
                    <a href="./order-management.php" class="mobile__heading-link">Đơn hàng</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                    <a href="./order-management.php" class="mobile__heading-link">Đăng xuất</a>
                </div>
            </div>
        </div>
    </header>
</body>