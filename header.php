<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/381365316_305905915351952_8433167268195273607_n.png" sizes="16x16">
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
                    <a href="" class="navbar__logo-link">
                        <img src="./img/findy-logo-ngang.png" alt="Findy" class="navbar__logo-img">
                    </a>
                </div>
                <div class="navbar__heading">
                    <a href="./userful/hirephoto.php" class="navbar__heading-link">Thuê Thợ</a>
                </div>
                <div class="navbar__heading">
                    <a href="./userful/jobsearch.php" class="navbar__heading-link">Tìm việc</a>
                </div>
                <div class="navbar__heading">
                    <a href="./userful/create_profile.php" class="navbar__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="navbar__heading">
                    <a href="#" class="navbar__heading-link">Blog</a>
                </div>
                <div class="navbar__heading">
                    <a href="#" onclick="showchoice_service()" class="navbar__heading-link">Đăng ký</a>
                </div>
                <div class="navbar__heading">
                    <a href="#" onclick="showLoginForm()" class="navbar__heading-link">Đăng nhập</a>
                </div>

                <!-- Mobile menu icon -->
                <label for="mobile-bars-checkbox" class="navbar__mobile-bars">
                    <i class="navbar__heading-icon fa-solid fa-bars"></i>
                </label>
            </nav>

            <input type="checkbox" hidden id="mobile-bars-checkbox" class="navbar__bars-checkbox">
                    
            <!-- Mobile menu -->
            <div class="mobile__menu">
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                    <a href="#" onclick="showchoice_service()" class="mobile__heading-link">Đăng ký</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                    <a href="#" onclick="showLoginForm()" class="mobile__heading-link">Đăng nhập</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                    <a href="./userful/hirephoto.php" class="mobile__heading-link">Thuê Thợ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                    <a href="./userful/jobsearch.php" class="mobile__heading-link">Tìm việc</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-pen"></i>
                    <a href="./userful/create_profile.php" class="mobile__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                    <a href="" class="mobile__heading-link">Blog</a>
                </div>
            </div>
        </div>
    </header>