<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="../img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/base.css">
    <!-- <link rel="stylesheet" href="../mainphoto.css">
    <link rel="stylesheet" href="../mainicon.css"> -->
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="./hirephoto.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.3.0-web/css/all.min.css">
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
                    <a href="../main.php" class="navbar__logo-link">
                        <img src="../img/findy-logo-ngang.png" alt="Findy" class="navbar__logo-img">
                    </a>
                </div>
                <div class="navbar__heading">
                    <a href="./hirephoto.php" class="navbar__heading-link">Thuê Thợ</a>
                </div>
                <div class="navbar__heading">
                    <a href="./jobsearch.php" class="navbar__heading-link">Tìm việc</a>
                </div>
                <div class="navbar__heading">
                    <a href="./create_profile.php" class="navbar__heading-link">Tạo hồ sơ</a>
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
                    <a href="#" onclick="showchoice_service()" class="navbar__heading-link">Đăng ký</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                    <a href="#" onclick="showLoginForm()" class="mobile__heading-link">Đăng nhập</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                    <a href="./hirephoto.php" class="navbar__heading-link">Thuê Thợ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                    <a href="./jobsearch.php" class="navbar__heading-link">Tìm việc</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-pen"></i>
                    <a href="./create_profile.php" class="navbar__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                    <a href="" class="mobile__heading-link">Blog</a>
                </div>
            </div>
        </div>
    </header>

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
                                Lọc theo
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
                            <!-- <div class="row">
                                <div class="filter_bottom-address col c-12 m-12 l-12">
                                    <select name="" id="" class="booking__input">
                                        <option value="">Địa điểm</option>
                                        <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Thanh Hóa">Thanh Hóa</option>
                                        <option value="Đồng Nai">Đồng Nai</option>
                                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>

                                    </select>
                                </div>
                                <div class="filter_bottom-price col c-12 m-12 l-12">
                                    <select name="" id="" class="booking__input">
                                        <option value="">Giá</option>
                                        <option value="10 giờ">nhỏ hơn 200</option>
                                        <option value="10 giờ">200-500</option>
                                        <option value="10 giờ">500-800</option>
                                        <option value="10 giờ">800-1000</option>
                                        <option value="10 giờ">1000-1500</option>
                                        <option value="10 giờ">trên 1500</option>

                                    </select>
                                </div>
                                <div class="filter_bottom-price col c-12 m-12 l-12">
                                    <select name="" id="" class="booking__input">
                                        <option value="">Thiết bị</option>
                                        <option value="10 giờ">Điện thoại</option>
                                        <option value="10 giờ">Máy ảnh</option>


                                    </select>
                                </div>
                                <div class="filter_bottom-hinhthuc col c-12 m-12 l-12">
                                    <select name="" id="" class="booking__input">
                                        <option value="">Hình thức</option>
                                        <option value="Nhiếp ảnh trừu tượng">Nhiếp ảnh trừu tượng</option>
                                        <option value="Nhiếp ảnh kiến trúc">Nhiếp ảnh kiến trúc</option>
                                        <option value="Chụp ảnh trẻ sơ sinh">Chụp ảnh trẻ sơ sinh</option>
                                        <option value="1Chụp ảnh đen trắng">Chụp ảnh đen trắng</option>
                                        <option value="Make-up">Make-up</option>

                                    </select>
                                </div>
                                <div class="filter_bottom-style col c-12 m-12 l-12">
                                    <select name="" id="" class="booking__input">
                                        <option value="">Phong cách</option>
                                        <option value="CHÂN DUNG TRUYỀN THỐNG">Nàng thơ</option>
                                        <option value="CHỤP KHOẢNH KHẮC">Truyền thống</option>
                                        <option value="CHỤP CHÂN DUNG QUYẾN RŨ">Cổ trang</option>
                                        <option value="CHÂN DUNG CUỘC SỐNG">Hiện đại</option>
                                        <option value="CHÂN DUNG SIÊU THỰC">Quyến rũ</option>
                                        <option value="CHÂN DUNG CUỘC SỐNG">Tuổi teen</option>
                                        <option value="CHÂN DUNG SIÊU THỰC">Thanh xuân</option>

                                    </select>
                                </div>
                                <div class="filter_bottom-event col c-12 m-12 l-12">
                                    <select name="" id="" class="booking__input">
                                        <option value="">Sự kiện</option>
                                        <option value="10 giờ">Đám cưới</option>
                                        <option value="11 giờ">Sinh nhật</option>
                                        <option value="12 giờ">Kỷ yếu</option>
                                        <option value="13 giờ">Đi tiệc</option>

                                    </select>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="col l-9 m-8 c-12">
                        <div class="jobbest_container">
                            <!-- <div class="jobbest-header">
                                <div class="jobbest-header--bottom_filter">
                                    <input type="text" name="" id="" placeholder="Lọc theo">
                                </div>
                            </div> -->

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
<<<<<<< HEAD
                                            $mathongtinthue = $result['mathongtinthue'];
                                            include "../db_connection.php";
                                            $sql = "SELECT * FROM thongtinthue WHERE mathongtinthue = $mathongtinthue";
                                            $result_thongtinthue = $conn->query($sql);
                                            if ($result_thongtinthue) {
                                                $thongtinthue_data = $result_thongtinthue->fetch_assoc();
                                                $hinhanhthue = $thongtinthue_data['hinhanhthue'];
                                           
                                ?>
                            <a href="./photoclick.php?tenposttimtho=<?php echo urlencode($result['tenposttimtho']); ?>&phongcach=<?php echo urlencode($result['phongcach']); ?>&mathongtinthue=<?php echo urlencode($result['mathongtinthue']); ?>&ma_posttimtho=<?php echo urlencode($result['ma_posttimtho']); ?>&thoigian=<?php echo urlencode($result['thoigian']); ?>&gia=<?php echo urlencode($result['gia']); ?>&sukien=<?php echo urlencode($result['sukien']); ?>&diadiem=<?php echo urlencode($result['diadiem']); ?>&motachitiet=<?php echo urlencode($result['motachitiet']); ?>" class="col c-12 m-6 l-6">
                                <div class="jobbest-items ">
                                    <div class="jobbest-mid-top">
                                        <div class="row">
                                            
                                            <div class="jobbest-mid-top--left col c-3 m-3 l-3">
                                                <img src="../img/<?php echo $hinhanhthue ?>" style="width:80px;height:80px;border-radius:50%" alt="">
                                            </div>
                                            <div class="jobbest-mid-top--right col c-8 m-8 l-8" >
                                                <?php echo $result['tenposttimtho']  ?>
                                                <p><?php echo $result['thoigian'] ?></p>
                                                <p>Giá: <?php echo $result['gia'] ?></p>
                                                <p><?php echo $result['sukien'] ?></p>
                                                <p><?php echo $result['diadiem'] ?></p>
                                            </div>
                                            <div class="jobbest-mid-top--right2 col c-1 m-1 l-1">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="jobbest-mid-bottom">
                                        <div class="jobbest-mid-bottom-item  c-3 m-3 l-3">
                                            
                                        </div>
                                        <div class="jobbest-mid-bottom-item  c-3 m-3 l-3">
                                            
                                        </div>
                                        <div class="jobbest-mid-bottom-item  c-3 m-3 l-3">
                                            
                                        </div>
                                       
=======
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
                                                    <!-- <div class="jobbest-list-bottom">
                                                        <div class="jobbest-list-bottom-item  c-3 m-3 l-3">
>>>>>>> e4098b510ef2108a428df17eaed8351ace4ad601

                                                        </div>
                                                        <div class="jobbest-list-bottom-item  c-3 m-3 l-3">

                                                        </div>
                                                        <div class="jobbest-list-bottom-item  c-3 m-3 l-3">

                                                        </div>
                                                    </div> -->
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                        }
                                    }
<<<<<<< HEAD
                                }
                            }
                            ?>     
                           
=======
                                    ?>
                                </div>
                            </div>
>>>>>>> e4098b510ef2108a428df17eaed8351ace4ad601
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="jobbest">
            <div class="grid wide">

            </div>
        </div>
    </section>

    <section>
        <div class="bannermid">
            <div class="grid wide">
                <div class="bannermid_container row">
                    <div class="bannermid_items col c-4 m-4 l-4">
                        <img src="./img/Việt Nam.jpg" alt="">
                    </div>
                    <div class="bannermid_items col c-4 m-4 l-4">
                        <img src="./img/Colors of Hoi An, Vietnam.jpg" alt="">
                    </div>
                    <div class="bannermid_items col c-4 m-4 l-4">
                        <img src="./img/download (4).jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    
=======
    <section>
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
    </section>
>>>>>>> e4098b510ef2108a428df17eaed8351ace4ad601
    <section>
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

    </section>
    <!-- <script src="https://maps.app.goo.gl/3ooNCCMS91rFeVE88" async defer></script>
    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
                
            });
            console.log(zoom);
        }
    </script> -->

    <div class="choice_service ">
        <div class="choice_service_container">
            <div class="choice_service_content">
                <div class="choice_service_content_container">
                    <button onclick="showRegisterForm()">Muốn làm người thuê</button>
                    <button onclick="showRegisterForm2()">Muốn làm thợ</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="modal__container">
            <!-- Register form1 -->
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
                    <!-- <p class="account_form__separate">
                        <span class="account_form__separate-text">Bạn đã có tài khoản Findy?</span>
                    </p>
                    <button class="btn account_form__footer-btn">Đăng nhập</button> -->

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                    </p>
                </div>
            </form>
            <!-- thợ -->
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
                    <!-- <p class="account_form__separate">
                        <span class="account_form__separate-text">Bạn đã có tài khoản Findy?</span>
                    </p>
                    <button class="btn account_form__footer-btn">Đăng nhập</button> -->

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                    </p>
                </div>
            </form>
            <!-- Login form -->

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
                    <!-- <p class="account_form__separate">
                        <span class="account_form__separate-text">Bạn đã có tài khoản Findy?</span>
                    </p>
                    <button class="btn account_form__footer-btn">Đăng nhập</button> -->

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showRegisterForm()">Đăng ký</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script src="../main.js"></script>
    <script src="../video.js"></script>

</body>

</html>