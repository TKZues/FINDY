<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./find-timtho.css">
    <link rel="stylesheet" href="./post-management.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>

<body>
    <?php
    include "header.php"
    ?>

    <section>
        <div class="videomain">
            <div class="videomain_video">
                <video id="myVideo" autoplay>
                    <source src="./video/Cinematic Camera Intro.mp4" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video HTML5.
                </video>
                <div class="grid wide">
                    <div class="videomain_text">
                        <div class="videomain_text--header">
                            <p>Thuê các Photographer & Make-up Artist tốt nhất cho mọi công việc trực tuyến.</p>
                        </div>
                        <div class="videomain_text--items">
                            <ul>
                                <li>Mọi công việc mà bạn có thể nghĩ ra</li>
                                <li>Tiết kiệm đến 90% và nhận báo giá miễn phí</li>
                                <li>Chỉ trả tiền khi thấy hài lòng 100%</li>
                            </ul>
                        </div>
                        <div class="videomain_text--button">
                            <button onclick="showLoginForm()" type="button">Thuê photographer & Make-up Artist</button>
                            <button onclick="showLoginForm()" type="button">Kiếm tiền từ photographer & Make-up Artis</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="post">
            <div class="grid wide">
                <div class="heading">Bài đăng gần đây</div>
                <div id="postModal" style="display: none;">
                    <form id="postForm">
                        <label for="postTitle">Tiêu đề bài đăng:</label>
                        <input type="text" id="postTitle" name="postTitle" required><br>

                        <label for="postContent">Nội dung bài đăng:</label>
                        <textarea id="postContent" name="postContent" required></textarea>

                        <button type="add-post-btn" onclick="addNewPost()">Đăng bài</button>
                        <button type="button" onclick="closePostModal()">Đóng</button>
                    </form>
                </div>
                <div class="grid-container" id="gridContainer">
                <?php
                include "connect.php";
                $connect = new connect;
                $select_post = $connect->select_post();
                $count_post = $connect->count_post();
                if ($select_post->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($select_post)) {
                        $noidung = $row["content"];
                        $postid = $row["post_id"];
                        $nguoidang = $row["hoTen"];
                        $hinhanhtho = $row["hinhanhtho"];
                        $likes = $row["likes"];
                        $hinhanh = $row["image"];
                        $posttitle = $row["post_title"];
                        // $ten = urlencode($row['ten']);
                        // $nghenghiep = urlencode($row['nghenghiep']);
                        // $gioithieu = urlencode($row['gioithieu']);
                        // $sdt = urlencode($row['sdt']);
                        // $email = urlencode($row['email']);
                        // $diachi = urlencode($row['diachi']);
                        echo
                        "<div class='grid-item'>
                        <div class='dim' onclick='closePopup()'></div>
                        <div class='popup-container' id='popup'>
                        </div>
                        <a class='darken' onclick='openPopup()' data-id=$postid>
                            <img src='./img/$hinhanh' alt='Post Image'>
                            <div class='overlay'>$posttitle</div>
                        <a />
                            <div class='post-title'> $posttitle </div>
                            <div class='post-meta'>
                                <div class='user-info'>
                                    <a href='info-freelancer.php?name=ten&job=nghenghiep&rating=4.9&reviews=gioithieu&sdt=sdt&email=email&address=diachi'>
                                        <img id='avatar' src='./img/$hinhanhtho'>
                                    </a>
                                    <a><span class='user-name'> $nguoidang </span></a>
                                </div>
                                <div>
                                    <span class='like-count'> $likes </span>
                                    <button class='interaction-btn' onclick='likePost(this)'><i class='far fa-heart'></i></button>
                                </div>
                            </div>
                    </div>";
                    }
                } else {
                    echo "<div></div>";
                }

                ?>
                </div>
            </div>
        </div>
    </section>

    <div class="find-timtho-container">
        <div class="grid wide">
            <div class="row find-timtho-content">
                <div class="freelancer">
                    <div class="heading">Photographer & Make-up Artist tốt nhất</div>
                    <div class="row">
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-1.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Trần Minh Khánh
                                            </span>
                                            <span class="freelancer-item__text">
                                                Nhiếp ảnh gia tự do
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>4.9</strong>
                                                <span>(234 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">090 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">t*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Bình Thạnh, Hồ Chí Minh</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-1-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-1-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-1-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- <div class="freelancer-item__view-details">
                                    <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-2.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Trần Thu Trang
                                            </span>
                                            <span class="freelancer-item__text">
                                                Make-up cô dâu
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>4.9</strong>
                                                <span>(108 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">090 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">h*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Quận 1, Hồ Chí Minh</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-2-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-2-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-2-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- <div class="freelancer-item__view-details">
                                    <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-3.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Nguyễn Văn Nam
                                            </span>
                                            <span class="freelancer-item__text">
                                                Chuyên ảnh cưới
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>4.6</strong>
                                                <span>(120 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">038 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">n*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Đà Nẵng</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-3-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-3-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-3-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- <div class="freelancer-item__view-details">
                                    <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-4.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Vũ Quốc Tuấn
                                            </span>
                                            <span class="freelancer-item__text">
                                                Chuyên ảnh sơ sinh
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>5.0</strong>
                                                <span>(108 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">037 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">t*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Gò Vấp, Hồ Chí Minh</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-4-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-4-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-4-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- <div class="freelancer-item__view-details">
                                    <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-5.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Đỗ Hoàng Anh
                                            </span>
                                            <span class="freelancer-item__text">
                                                Make-up nghệ thuật
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>4.5</strong>
                                                <span>(125 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">039 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">h*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Thanh Xuân, Hà Nội</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-5-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-5-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-5-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- <div class="freelancer-item__view-details">
                                    <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-6.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Hoàng Diệu Linh
                                            </span>
                                            <span class="freelancer-item__text">
                                                Make-up sự kiện
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>4.6</strong>
                                                <span>(93 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">038 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">l*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Thủ Đức, Hồ Chí Minh</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-6-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-6-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-6-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- <div class="freelancer-item__view-details">
                                    <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-7.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Lê Phương Mai
                                            </span>
                                            <span class="freelancer-item__text">
                                                Chuyên ảnh kỷ yếu
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>4.8</strong>
                                                <span>(190 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">090 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">m*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Thủ Đức, Hồ Chí Minh</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-7-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-7-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-7-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-8.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Lê Hoàng Long
                                            </span>
                                            <span class="freelancer-item__text">
                                                Chuyên ảnh cổ phục
                                            </span>
                                            <div class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </div>
                                            <div class="freelancer-item__rating">
                                                <strong>5.0</strong>
                                                <span>(219 đánh giá)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="freelancer-item__contact">
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                            <span class="freelancer-item__contact-text">037 **** ***</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                            <span class="freelancer-item__contact-text">h*******@gmail.com</span>
                                        </div>
                                        <div class="freelancer-item__contact-info">
                                            <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                            <span class="freelancer-item__contact-text">Đống Đa, Hà Nội</span>
                                        </div>
                                    </div>

                                    <div class="slide-show-artwork">
                                        <div class="freelancer-item__artwork-list">
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="post-container">
        <div class="grid wide">
            <div class="content">
                <div class="post">
                    <div class="heading">Việc làm tốt mọi nơi</div>
                    <div class="row">
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="post-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ niệm gia đình</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Khải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 1.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <!-- <p class="post-content__text">
                                        Chúng tôi đang tìm kiếm một nhiếp ảnh gia tài năng, đam mê và sáng tạo để ghi lại những khoảnh khắc quý giá trong cuộc sống gia đình chúng tôi.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Chụp ảnh gia đình</a>
                                    </div> -->
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="post-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ niệm gia đình</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Khải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 1.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <!-- <p class="post-content__text">
                                        Chúng tôi đang tìm kiếm một nhiếp ảnh gia tài năng, đam mê và sáng tạo để ghi lại những khoảnh khắc quý giá trong cuộc sống gia đình chúng tôi.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Chụp ảnh gia đình</a>
                                    </div> -->
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="post-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ niệm gia đình</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Khải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 1.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <!-- <p class="post-content__text">
                                        Chúng tôi đang tìm kiếm một nhiếp ảnh gia tài năng, đam mê và sáng tạo để ghi lại những khoảnh khắc quý giá trong cuộc sống gia đình chúng tôi.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Chụp ảnh gia đình</a>
                                    </div> -->
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="post-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ niệm gia đình</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Khải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 1.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <!-- <p class="post-content__text">
                                        Chúng tôi đang tìm kiếm một nhiếp ảnh gia tài năng, đam mê và sáng tạo để ghi lại những khoảnh khắc quý giá trong cuộc sống gia đình chúng tôi.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Chụp ảnh gia đình</a>
                                    </div> -->
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="post-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ niệm gia đình</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Khải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 1.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <!-- <p class="post-content__text">
                                        Chúng tôi đang tìm kiếm một nhiếp ảnh gia tài năng, đam mê và sáng tạo để ghi lại những khoảnh khắc quý giá trong cuộc sống gia đình chúng tôi.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Chụp ảnh gia đình</a>
                                    </div> -->
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="post-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ niệm gia đình</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Khải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 1.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <!-- <p class="post-content__text">
                                        Chúng tôi đang tìm kiếm một nhiếp ảnh gia tài năng, đam mê và sáng tạo để ghi lại những khoảnh khắc quý giá trong cuộc sống gia đình chúng tôi.
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail">Hồ Chí Minh</a>
                                        <a href="#" class="post-content__detail">Chụp ảnh gia đình</a>
                                    </div> -->
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section>
        <div class="main">
            
            <div class="grid wide">
                <div class="main_img">
                    <video id="myVideo" autoplay >
                        <source src="./video/Cinematic Camera Intro.mp4" type="video/mp4">
                        Trình duyệt của bạn không hỗ trợ video HTML5.
                      </video>
                      <div class="buttom_voice">
                        <button onclick="adjustVolume(-0.1)">Giảm âm lượng</button>
                        <button onclick="adjustVolume(0.1)">Tăng âm lượng</button>
                    </div> 
                </div>
                
                <div class="main_mid row">
                    <div class="main_left col c-8 m-8 l-8">
                        <div class="main_left-img">
                            
                        </div>
                    </div>
                    <div class="main_right col c-4 m-4 l-4">

                    </div>
                </div>
                <div class="main_bottom">
                    <div class="main_bottom-container row">
                        <div class="main_bottom-onepic col c-6 m-6 l-6">
                            <img src="./video/a7db47168147165.Y3JvcCwxNjM4LDEyODEsMCw1Ng.webp" alt="">
                        </div>
                    
                        <div class="main_bottom-fourpic col c-6 m-6 l-6">
                            <div class="row">
                                <div class="fourpic_top col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_top-left  c-6 m-6 l-6">
                                            <img src="./video/34730f178063661.Y3JvcCw0MjU5LDMzMzEsMCwxNTI4.webp" alt="">
                                        </div>
                                        <div class="fourpic_top-right  c-6 m-6 l-6">
                                            <img src="./video/e47c4f174127615.Y3JvcCw1MTEzLDQwMDAsNTA2LDA.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="fourpic_bottom col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_bottom-left  c-6 m-6 l-6">
                                            <img src="./video/6e17cf173402337.Y3JvcCwzNjU2LDI4NTksMCwzMDc.webp" alt="">
                                        </div>
                                        <div class="fourpic_bottom-right  c-6 m-6 l-6">
                                            <img src="./video/04477d173387439.Y3JvcCwxOTIwLDE1MDEsMCw2ODk.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="main_bottom-fourpic col c-6 m-6 l-6">
                            <div class="row">
                                <div class="fourpic_top col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_top-left  c-6 m-6 l-6">
                                            <img src="./video/09d1df150846019.63391d434f020.webp" alt="">
                                        </div>
                                        <div class="fourpic_top-right  c-6 m-6 l-6">
                                            <img src="./video/bd1872176069037.Y3JvcCwxMDQzLDgxNiwxNzgsNDY.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="fourpic_bottom col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_bottom-left  c-6 m-6 l-6">
                                            <img src="./video/3a2a81177378365.Y3JvcCwxMDgwLDg0NCwwLDI1MQ.webp" alt="">
                                        </div>
                                        <div class="fourpic_bottom-right  c-6 m-6 l-6">
                                            <img src="./video/153993129649549.Y3JvcCwzMDAwLDIzNDYsMCwzMDQ.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_bottom-onepic col c-6 m-6 l-6">
                            <img src="./video/7d8df8165681079.Y3JvcCwxMDgwLDg0NCwwLDExNw.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="product">
            <div class="grid wide">
                <div class="row">
                   
                        <div class="product_item col c-4 m-4 l-4">
                            <a href="">
                                <div class="product_item-container">
                                    <div class="product_item-img">
                                        <img src="./video/01-Simple-13-scaled.jpg" alt="">
                                    </div>
                                    <div class="product_item-name">
                                        SIMPLE
                                    </div>
                                    <div class="product_item-price">
                                        Giá : 6,800,000
                                    </div>
                                </div>
                            </a>
                        </div>
                   
                    
                        <div class="product_item col c-4 m-4 l-4">
                            <a href="">
                                <div class="product_item-container">
                                    <div class="product_item-img">
                                        <div>
                                            <img src="./video/02-classic-5-scaled.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product_item-name">
                                        CLASSIC
                                    </div>
                                    <div class="product_item-price">
                                        
                                        Giá : 6,800,000
                                    </div>
                                </div>
                            </a>
                        </div>
                    
                   
                        <div class="product_item col c-4 m-4 l-4">
                            <a href="">
                                <div class="product_item-container">
                                    <div class="product_item-img">
                                        <img src="./video/03-silver-12-scaled.jpg" alt="">
                                    </div>
                                    <div class="product_item-name">
                                        SILVER
                                    </div>
                                    <div class="product_item-price">
                                        Giá : 6,800,000
                                    </div>
                                </div>
                            </a>
                        </div>
                    
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="banner">
            <div class="grid wide">
                
                    <div class="banner_img">
                        <div class="banner_img-container">
                            <div class="banner_img-img">
                                <a href=""><img src="./img/banner1.jpg" alt=""></a>
                                <a href=""><img src="./img/banner2.jpg" alt=""></a>
                                <a href=""><img src="./img/banner3.jpg" alt=""></a>
                                <a href=""><img src="./img/banner4.jpg" alt=""></a>
                                <a href=""><img src="./img/banner5.jpg" alt=""></a>
                            </div>
                            <div class="button_banner">
                                <i class="fa-solid fa-chevron-left"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="forthe">
            <div class="grid wide">
                <div class="forthe_container">
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                            For the items
                        </div>
                        <div class="forthe_items-bottom">
                            <div class="forthe_items-bottom--container row">
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                            For the reception
                        </div>
                        <div class="forthe_items-bottom">
                            <div class="forthe_items-bottom--container row">
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/This City-Loving Couple Said _I Do_ in a Glam Gramercy Park Hotel Wedding in NYC _ Junebug Weddings.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/download.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/ONE WEDDING DA NANG.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/download (1).jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                            For the spotlight
                        </div>
                        <div class="forthe_items-bottom">
                            <div class="forthe_items-bottom--container row">
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/Nothing less than perfect.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/Knowing Your Territory_ Can You Make a Living Podcasting_.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/Exclusive Photos! Head Backstage for a Magical Pre-Show Peek at the Soaring Stars of Pippin.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/download (2).jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                            Photographers capture beautiful moments and turn them into art through their camera lenses, while Make-up Artists transform faces into vibrant canvases using colors and techniques. Both professions not only enhance the beauty of individuals but also create unique artistic works that boost confidence and self-expression. Together, they play a crucial role in making people feel special and capturing the world from a perspective of beauty and art.
                        </div>
                        <div class="forthe_items-bottom">
                            <video id="mVideo" autoplay>
                                <source src="./video/videomakeup.mp4" type="video/mp4">
                                Trình duyệt của bạn không hỗ trợ video HTML5.
                            </video>
                            <div class="buttom_voice">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <div class="forthe">
        <video id="mVideo" autoplay>
            <source src="./video/videomakeup.mp4" type="video/mp4">
            Trình duyệt của bạn không hỗ trợ video HTML5.
        </video>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./main.js"></script>
    <script src="./video.js"></script> -->

    <?php
    include "footer.php";
    ?>

</body>