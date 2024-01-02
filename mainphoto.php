<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./mainphoto.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    
    <style>
        .navbar__heading-warp > .navbar__heading:nth-child(1) > .navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>
    <!-- -----------chatbox------------ -->
    <?php
    include "id_tho.php";
    ?>


    <?php

    include "db_connection.php";

    $sql = "SELECT * FROM thongtintho
WHERE thongtintho.id_tho = $id_tho";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng kết quả
        while ($row = $result->fetch_assoc()) {
            // Lấy thông tin từ cột cần thiết
            $mathongtintho = $row['mathongtintho'];
        }
    } else {
        $mathongtintho = "";


        // Thông báo không tìm thấy thông tin
        // echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
    }
    // Các công việc khác cần làm trên trang mainphoto.php
    // echo "ID của Thợ: " . $id_tho;
    // echo "ID của Thợ: " . $hoTen;
    ?>

    <?php
    include "headerphoto1.php";
    ?>

    <section>
        <div class="banner">
            <div class="grid wide">
                <div class="banner_img">
                    <div class="banner_img-container">
                        <div class="banner_img-img">
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                        </div>
                        <div class="button_banner">
                            <i class="fa-solid fa-chevron-left"></i>
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="filter">
            <div class="grid wide">
                <div class="filter_container row">
                    <!-- <div class="filter_bottom col c-4 m-4 l-4">
                        <div class="filter_top c-12 m-12 l-12">
                            Lọc
                        </div>
                        <div class="row">
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
                        </div>
                    </div> -->

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
                                    <div id="filter__experience-item" class="filter__item">
                                        Kinh nghiệm
                                        <i id="filter__experience-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__experience-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__experience-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-1" class="">
                                            <label for="exp-1" class="filter__menu-name">Dưới 1 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-2" class="">
                                            <label for="exp-2" class="filter__menu-name">1 - 3 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-3" class="">
                                            <label for="exp-3" class="filter__menu-name">3 - 5 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-4" class="">
                                            <label for="exp-4" class="filter__menu-name">Trên 5 năm</;>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__skill-item" class="filter__item">
                                        Kỹ năng
                                        <i id="filter__skill-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__skill-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__skill-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-1" class="">
                                            <label for="skill-1" class="filter__menu-name">Chụp ảnh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-2" class="">
                                            <label for="skill-2" class="filter__menu-name">Quay video</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-3" class="">
                                            <label for="skill-3" class="filter__menu-name">Edit ảnh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-4" class="">
                                            <label for="skill-4" class="filter__menu-name">Edit video</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__rating-item" class="filter__item">
                                        Đánh giá
                                        <i id="filter__rating-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__rating-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__rating-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-1" class="">
                                            <label for="rating-1" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-2" class="">
                                            <label for="rating-2" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-3" class="">
                                            <label for="rating-3" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-4" class="">
                                            <label for="rating-4" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-5" class="">
                                            <label for="rating-5" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-6" class="">
                                            <label for="rating-6" class="star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="jobbest_container col c-8 m-8 l-8 ">
                        <div class="jobbest-header ">
                            <div class="jobbest-header--top">
                                Việc làm Photographer tốt nhất
                            </div>
                            <div class="jobbest-header--bottom">
                            </div>
                        </div>
                        <div class="jobbest-mid">
                            <div class="row">
                                <?php
                                include "connect.php"
                                ?>
                                <?php
                                $connect = new connect;
                                $select_postjob = $connect->select_postjob();

                                ?>
                                <div class="jobbest-mid">
                                    <div class="row">
                                        <?php
                                        if ($select_postjob) {
                                            while ($result = $select_postjob->fetch_assoc()) {
                                                $mathongtinthue = $result['mathongtinthue'];

                                                include "db_connection.php";
                                                $sql = "SELECT * FROM thongtinthue WHERE mathongtinthue = $mathongtinthue";
                                                $result_thongtinthue = $conn->query($sql);
                                                if ($result_thongtinthue) {
                                                    $thongtinthue_data = $result_thongtinthue->fetch_assoc();
                                                    $hinhanhthue = $thongtinthue_data['hinhanhthue'];

                                        ?>
                                                    <a href="./photoclick.php?tenposttimtho=<?php echo urlencode($result['tenposttimtho']); ?>&ma_posttimtho=<?php echo urlencode($result['ma_posttimtho']); ?>&phongcach=<?php echo urlencode($result['phongcach']); ?>&mathongtinthue=<?php echo urlencode($result['mathongtinthue']); ?>&ma_posttimtho=<?php echo urlencode($result['ma_posttimtho']); ?>&thoigian=<?php echo urlencode($result['thoigian']); ?>&gia=<?php echo urlencode($result['gia']); ?>&sukien=<?php echo urlencode($result['sukien']); ?>&diadiem=<?php echo urlencode($result['diadiem']); ?>&anhmau=<?php echo urlencode($result['anhmau']); ?>&motachitiet=<?php echo urlencode($result['motachitiet']); ?>" class="col c-12 m-6 l-6">
                                                        <div class="jobbest-items ">
                                                            <div class="jobbest-mid-top">
                                                                <div class="row">

                                                                    <div class="jobbest-mid-top--left col c-3 m-3 l-3">
                                                                        <img src="./img/<?php echo $hinhanhthue ?>" style="width:80px;height:80px;border-radius:50%" alt="">
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right col c-8 m-8 l-8">
                                                                        <p><?php echo $result['tenposttimtho']  ?></p>
                                                                        <p><i class="fa-regular fa-calendar"></i><?php echo $result['thoigian'] ?></p>
                                                                        <p><i class="fa-solid fa-coins"></i><?php echo $result['gia'] ?></p>
                                                                        <p><i class="fa-regular fa-calendar"></i><?php echo $result['sukien'] ?></p>
                                                                        <p><i class="fa-solid fa-location-dot"></i> <?php echo $result['diadiem'] ?></p>
                                                                    </div>
                                                                    <div class="jobbest-mid-top--right2 col c-1 m-1 l-1">

                                                                        <button type="submit"><i class="fa-regular fa-heart"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                        <?php
                                                }
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

    <script src="./main.js"></script>
    <script src="./find-timtho.js"></script>

    <?php
    include "./footer.php"
    ?>
</body>

</html>