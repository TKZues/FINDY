<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="./hirephoto.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp>.navbar__heading:nth-child(1)>.navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>
    <?php
    include "../header.php"
    ?>

    <section>
        <div class="banner">
            <div class="grid wide">
                <!-- <div class="banner-header">
                        <span>
                            <p class="content" id="24hVi">Tìm việc làm nhanh 24h, việc làm mới nhất trên toàn quốc.</p>
                            <p class="content" id="24hEn" style="display: none;">Find fast job opportunities 24/7, the latest jobs nationwide.</p>

                            
                        </span>
                            <p class="content" id="24hVi">Tiếp cận 40,000+ tin tuyển dụng việc làm mỗi ngày từ hàng nghìn doanh nghiệp uy tín tại Việt Nam</p>
                            <p class="content" id="24hEn" style="display: none;">Easily access over 40,000+ job vacancies every day from thousands of reputable businesses in Vietnam.</p>
                    </div> -->

                <div class="banner_img">
                    <div class="banner_img-container">
                        <div class="banner_img-img">
                            <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                        </div>
                        <div class="button_banner">
                            <i class="button_banner-icon fa-solid fa-chevron-left"></i>
                            <i class="button_banner-icon fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="job">
            <div class="grid wide">
                <div class="job-header">
                    Việc làm Photographer tốt nhất
                </div>
                <div class="row job_container">
                    <div class="col l-3 m-4 c-0">
                        <div class="filter">
                            <h3 class="filter__heading">
                                <i class="filter__heading-icon fa-solid fa-filter"></i>
                                Lọc
                            </h3>
                            <div class="filter__list">
                                <div class="filter__item-warp">
                                    <div id="filter__place-item" class="filter__item">
                                        Địa điểm
                                        <i id="filter__place-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__place-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__place-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-1" class="">
                                            <label for="place-1" class="filter__menu-name">Hồ Chí Minh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-2" class="">
                                            <label for="place-2" class="filter__menu-name">Hà Nội</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-3" class="">
                                            <label for="place-3" class="filter__menu-name">Đà Nẵng</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-4" class="">
                                            <label for="place-4" class="filter__menu-name">Đà Lạt</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-5" class="">
                                            <label for="place-5" class="filter__menu-name">Phú Quốc</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-6" class="">
                                            <label for="place-6" class="filter__menu-name">Khác</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__price-item" class="filter__item">
                                        Giá
                                        <i id="filter__price-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__price-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__price-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="text" name="" id="" class="filter__price-input" placeholder="₫ TỪ">
                                            <span class="filter__menu-name">-</span>
                                            <input type="text" name="" id="" class="filter__price-input" placeholder="₫ ĐẾN">
                                        </div>
                                        <button class="btn btn--primary filter__menu-btn">ÁP DỤNG</button>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__device-item" class="filter__item">
                                        Thiết bị
                                        <i id="filter__device-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__device-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__device-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="device-1" class="">
                                            <label for="device-1" class="filter__menu-name">Điện thoại</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="device-2" class="">
                                            <label for="device-2" class="filter__menu-name">Máy ảnh</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__hinhthuc-item" class="filter__item">
                                        Hình thức
                                        <i id="filter__hinhthuc-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__hinhthuc-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__hinhthuc-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="hinhthuc-1" class="">
                                            <label for="hinhthuc-1" class="filter__menu-name">Nhiếp ảnh trừu tượng</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="hinhthuc-2" class="">
                                            <label for="hinhthuc-2" class="filter__menu-name">Nhiếp ảnh kiến trúc</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="hinhthuc-3" class="">
                                            <label for="hinhthuc-3" class="filter__menu-name">Chụp ảnh trẻ sơ sinh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="hinhthuc-4" class="">
                                            <label for="hinhthuc-4" class="filter__menu-name">Chụp ảnh đen trắng</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="hinhthuc-5" class="">
                                            <label for="hinhthuc-5" class="filter__menu-name">Make-up</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__style-item" class="filter__item">
                                        Phong cách
                                        <i id="filter__style-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__style-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__style-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="style-1" class="">
                                            <label for="style-1" class="filter__menu-name">Nàng thơ</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="style-2" class="">
                                            <label for="style-2" class="filter__menu-name">Truyền thống</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="style-3" class="">
                                            <label for="style-3" class="filter__menu-name">Cổ trang</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="style-4" class="">
                                            <label for="style-4" class="filter__menu-name">Hiện đại</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="style-5" class="">
                                            <label for="style-5" class="filter__menu-name">Quyến rũ</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="style-6" class="">
                                            <label for="style-6" class="filter__menu-name">Tuổi teen</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="style-7" class="">
                                            <label for="style-7" class="filter__menu-name">Thanh xuân</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l-9 m-8 c-12">
                        <div class="jobbest_container">
                            <?php
                            include "../connect.php"
                            ?>
                            <?php
                            $connect = new connect;
                            $select_postjob = $connect->select_postjob();
                            ?>
                            <div class="jobbest_list">
                                <div class="row sm-gutter">
                                    <?php
                                    if ($select_postjob) {
                                        while ($result = $select_postjob->fetch_assoc()) {
                                            $_SESSION['mathongtinthue '] = $result['mathongtinthue'];
                                            $_SESSION['tenposttimtho'] = $result['tenposttimtho'];
                                            $_SESSION['diadiem'] = $result['diadiem'];
                                            $_SESSION['thoigian'] = $result['thoigian'];
                                            $_SESSION['gia'] = $result['gia'];
                                            $_SESSION['sukien'] = $result['sukien'];
                                            $_SESSION['phongcach'] = $result['phongcach'];
                                            $_SESSION['anhmau'] = $result['anhmau'];
                                            $_SESSION['motachitiet'] = $result['motachitiet'];
                                    ?>
                                            <div class="col c-12 m-6 l-6">
                                                <a href="./photoclick.php" class="jobbest_item-warp">
                                                    <div class="jobbest_item">
                                                        <!-- <div class="jobbest-list-top--left col c-2 m-2 l-2">
                                                            <img src="<?php echo $imguserphoto_up ?>" alt="">
                                                        </div> -->
                                                        <div class="jobbest_info">
                                                            <h3 class="jobbest_info-title"><?php echo $result['tenposttimtho']  ?></h3>
                                                            <p class="jobbest_info-time"><?php echo $result['thoigian'] ?></p>
                                                            <p class="jobbest_info-price">Giá: <?php echo $result['gia'] ?></p>
                                                            <p class="jobbest_info-event"><?php echo $result['sukien'] ?></p>
                                                            <p class="jobbest_info-place"><?php echo $result['diadiem'] ?></p>
                                                        </div>
                                                        <div class="jobbest_favourite">
                                                            <i class="jobbest_favourite-icon fa-regular fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- <section>
        <div class="jobinteresting">
            <div class="grid wide">
                <div class="jobinteresting_container row">
                    <div class="jobinteresting_right col c-4 m-4 l-4">
                        <div class="jobinteresting_right-img">
                            <div class="jobinteresting_right-img--container">
                                <div class="jobinteresting_right-img-number">
                                    <a href=""><img src="../img/bannermid1.jpg" alt=""></a>
                                    <a href=""><img src="../img/bannermid2.jpg" alt=""></a>
                                    <a href=""><img src="../img/bannermid3.jpg" alt=""></a>
                                </div>
                                <div class="jobinteresting_right-img--button">
                                    <i class="fa-solid fa-angle-left"></i>
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jobinteresting_left col c-8 m-8 l-8">
                        <div class="jobbest-header">
                            <div class="jobbest-header--top">
                                Việc làm Make-up Artist tốt nhất
                            </div>
                            <div class="jobbest-header--bottom">
                                <div class="jobbest-header--bottom_filter">
                                    <input type="text" name="" id="" placeholder="Lọc theo">
                                </div>
                                <div class="jobbest-header--bottom-button">
                                    Ngẫu nhiên
                                </div>

                            </div>
                        </div>
                        <div class="jobbest-list">
                            <div class="row">
                                <?php

                                $select_postjob = $connect->select_postjob();
                                ?>
                                <div class="jobbest-list">
                                    <div class="row">
                                        <?php
                                        if ($select_postjob) {
                                            while ($result = $select_postjob->fetch_assoc()) {
                                                $imgusermake_up = "/FINDYDEMO/assets/php/img/" . $result['hinhAnh'];
                                                $detailLink1 = "./makeupclick.php?img=" . urlencode($imgusermake_up) .
                                                    "&giaCa1=" . urlencode($result['giaCa']) .
                                                    "&yeucau1=" . urlencode($result['yeucau']) .
                                                    "&tenCongViec1=" . urlencode($result['tenCongViec']) .
                                                    "&ten1=" . urlencode($result['ten']) .
                                                    "&moTa1=" . urlencode($result['moTa']);


                                        ?>
                                                <a href="<?php echo $detailLink1; ?>" class="col c-12 m-6 l-6">
                                                    <div class="jobbest-items ">
                                                        <div class="jobbest-list-top">
                                                            <div class="row">
                                                                <div class="jobbest-list-top--left col c-2 m-2 l-2">
                                                                    <img src="<?php echo $imgusermake_up ?>" alt="">
                                                                </div>
                                                                <div class="jobbest-list-top--right col c-9 m-9 l-9">
                                                                    <?php echo $result['tenCongViec'] ?>
                                                                    <p><?php echo $result['ten'] ?></p>
                                                                    <p> <?php echo $result['giaCa'] ?></p>

                                                                </div>
                                                                <div class="jobbest-list-top--right2 col c-1 m-1 l-1">
                                                                    <i class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jobbest-list-bottom">
                                                            <div class="jobbest-list-bottom-item">

                                                            </div>
                                                            <div class="jobbest-list-bottom-item">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="jobbest-bottom">
                                <i class="fa-solid fa-c-left"></i>
                                <span style="color:#00b14f">31</span> / <span>37 trang</span>
                                <i class="fa-solid fa-c-right"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section> -->
    <!-- <section>
        <div class="footer">
            <div class="grid wide">
                <div class="footer_container row">
                    <div class="footer_logo col c-2 m-2 l-2">
                        <div class="footer_logo-logo">
                            <img src="./assets/img/381365316_305905915351952_8433167268195273607_n.png" alt="">
                            FINDY
                        </div>
                        <div class="footer_logo-english">
                            <i class="fa-solid fa-earth-asia"></i>
                            <a href="">VietNam</a>/ <a href="">Tiếng Việt</a>
                        </div>
                        <div class="footer_logo-help">
                            <i class="fa-solid fa-circle-question"></i>
                            Giúp đỡ & Hỗ trợ
                        </div>
                        <div class="footer_logo-accessibility">
                            <i class="fa-solid fa-universal-access"></i>
                            Trợ năng
                        </div>
                    </div>
                    <div class="footer_findy col c-2 m-2 l-2">
                        <h1>Findy</h1>
                        <ul>
                            <a href="">
                                <li>Dự án</li>
                            </a>
                            <a href="">
                                <li>Cuộc thi</li>
                            </a>
                            <a href="">
                                <li>Thành viên</li>
                            </a>
                            <a href="">
                                <li>Quản lý dự án</li>
                            </a>
                            <a href="">
                                <li>Hình ảnh khắp nơi</li>
                            </a>
                            <a href="">
                                <li>Xác thực</li>
                            </a>
                        </ul>

                    </div>
                    <div class="footer_introduce col c-2 m-2 l-2">
                        <h1>Giới thiệu</h1>
                        <ul>
                            <a href="">
                                <li>Về chúng tôi</li>
                            </a>
                            <a href="">
                                <li>Cách thức hoạt động</li>
                            </a>
                            <a href="">
                                <li>Bảo mật</li>
                            </a>
                            <a href="">
                                <li>Nhà đầu tư</li>
                            </a>
                            <a href="">
                                <li>Sơ đồ trang</li>
                            </a>
                            <a href="">
                                <li>Tin tức</li>
                            </a>
                            <a href="">
                                <li>Đội ngũ</li>
                            </a>
                            <a href="">
                                <li>Công việc</li>
                            </a>
                        </ul>
                    </div>
                    <div class="footer_rules col c-2 m-2 l-2">
                        <h1>Điều khoản</h1>
                        <ul>
                            <a href="">
                                <li>Chính sách bảo mật</li>
                            </a>
                            <a href="">
                                <li>Điều khoản và điều kiện</li>
                            </a>
                            <a href="">
                                <li>Chính sách bản quyền</li>
                            </a>
                            <a href="">
                                <li>Quy tắc ứng xử</li>
                            </a>
                            <a href="">
                                <li>Các loại phí</li>
                            </a>
                        </ul>
                    </div>
                    <div class="footer_bussiness col c-2 m-2 l-2">
                        <h1>Đối tác</h1>
                        <ul>
                            <a href="">
                                <li>Escrow.com</li>
                            </a>
                            <a href="">
                                <li>Loadshift</li>
                            </a>
                            <a href="">
                                <li>Warrior Forum</li>
                            </a>
                        </ul>
                    </div>
                    <div class="footer_app col c-2 m-2 l-2">
                        <h1>Ứng dụng</h1>
                        <ul>
                            <a href="">
                                <li><img src="./img/app-store.svg" alt=""></li>
                            </a>
                            <a href="">
                                <li><img src="./img/google-play.svg" alt=""></li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section> -->

    <!-- <div class="choice_service ">
        <div class="choice_service_container">
            <div class="choice_service_content">
                <div class="choice_service_content_container">
                    <button onclick="showRegisterForm()">Muốn làm người thuê</button>
                    <button onclick="showRegisterForm2()">Muốn làm thợ</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="modal">
        <div class="modal__container">
            <?php
            include "../connect.php";
            ?>
            <?php
            $connect = new connect;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $insert_accountthue = $connect->insert_accountthue();
            }
            ?>
            <form class="account_form hidden" id="register-form" method="POST">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng ký thuê</h3>

                    <div class="account_form__form">
                        <input name="hoTen" type="text" class="account_form__input" placeholder="Họ và tên">
                        <input name="Email" type="email" class="account_form__input" placeholder="Email">
                        <input name="matKhau" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                        <input name="repeatmatKhau" type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                    </div>

                    <div class="account_form__aside">
                        <p class="account_form__policy-text">
                            Tôi đã đọc và đồng ý với
                            <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                            bao gồm
                            <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                            và
                            <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                        </p>
                    </div>

                    <button type="submit" class="btn btn--primary account_form__btn">Đăng ký</button>
                </div>

                <div class="account_form__socials">
                    <p class="account_form__separate">
                        <span class="account_form__separate-text">Hoặc</span>
                    </p>

                    <div class="account_form__socials-list">
                        <a href="" class="btn account_form__socials--facebook">
                            <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                            <span class="account_form__socials-title">
                                Facebook
                            </span>
                        </a>
                        <a href="" class="btn account_form__socials--google">
                            <span class="account_form__socials-icon">
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <g data-v-48748210="">
                                        <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                        <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                        <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                        <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                        <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="account_form__socials-title">
                                Google
                            </span>
                        </a>
                    </div>
                </div>

                <div class="account_form__footer">

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                    </p>
                </div>
            </form>
            <?php
            $connect = new connect;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $insert_accounttho = $connect->insert_accounttho();
            }
            ?>
            <form class="account_form2 hidden" id="register-form2" method="POST">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng ký thợ</h3>

                    <div class="account_form__form">
                        <input name="hoTen2" type="text" class="account_form__input" placeholder="Họ và tên">
                        <input name="Email2" type="email" class="account_form__input" placeholder="Email">
                        <input name="matKhau2" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                        <input name="repeatmatKhau2" type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                    </div>

                    <div class="account_form__aside">
                        <p class="account_form__policy-text">
                            Tôi đã đọc và đồng ý với
                            <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                            bao gồm
                            <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                            và
                            <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                        </p>
                    </div>

                    <button type="submit" class="btn btn--primary account_form__btn">Đăng ký</button>
                </div>

                <div class="account_form__socials">
                    <p class="account_form__separate">
                        <span class="account_form__separate-text">Hoặc</span>
                    </p>

                    <div class="account_form__socials-list">
                        <a href="" class="btn account_form__socials--facebook">
                            <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                            <span class="account_form__socials-title">
                                Facebook
                            </span>
                        </a>
                        <a href="" class="btn account_form__socials--google">
                            <span class="account_form__socials-icon">
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <g data-v-48748210="">
                                        <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                        <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                        <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                        <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                        <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="account_form__socials-title">
                                Google
                            </span>
                        </a>
                    </div>
                </div>

                <div class="account_form__footer">

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                    </p>
                </div>
            </form>

            <form class="account_form hidden" id="login-form" method="POST" action="login_process.php">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng nhập</h3>

                    <div class="account_form__form">
                        <input name="Emailuser" type="email" class="account_form__input" placeholder="Email">
                        <input name="Passworduser" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    </div>

                    <button type="submit" class="btn btn--primary account_form__btn">Đăng nhập</button>
                </div>

                <div class="account_form__socials">
                    <p class="account_form__separate">
                        <span class="account_form__separate-text">Hoặc</span>
                    </p>

                    <div class="account_form__socials-list">
                        <a href="" class="btn account_form__socials--facebook">
                            <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                            <span class="account_form__socials-title">
                                Facebook
                            </span>
                        </a>
                        <a href="" class="btn account_form__socials--google">
                            <span class="account_form__socials-icon">
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <g data-v-48748210="">
                                        <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                        <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                        <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                        <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                        <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="account_form__socials-title">
                                Google
                            </span>
                        </a>
                    </div>
                </div>

                <div class="account_form__footer">

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showRegisterForm()">Đăng ký</a>
                    </p>
                </div>
            </form>
        </div>
    </div> -->

    <!-- <script src="../main.js"></script>
    <script src="../video.js"></script> -->

    <script src="../find-timtho.js"></script>

    <?php
    include "../footer.php"
    ?>

</body>

</html>