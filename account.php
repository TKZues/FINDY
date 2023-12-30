<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findy</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./account.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>

<body>
    <?php
    session_start();

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (!isset($_SESSION['id_thue']) || !isset($_SESSION['hoTen']) || !isset($_SESSION['gmail'])) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập hoặc hiển thị thông báo lỗi
        header("Location: main.php");
        exit();
    }

    // Lấy thông tin người dùng từ session
    $id_thue = $_SESSION['id_thue'];
    $hoTen = $_SESSION['hoTen'];
    $gmail = $_SESSION['gmail'];

    // Kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
    include "db_connection.php";

    // Truy vấn SQL để lấy thông tin từ bảng thongtinthue dựa trên id_thue
    $sql = "SELECT * FROM thongtinthue WHERE id_thue = $id_thue";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng kết quả
        while ($row = $result->fetch_assoc()) {
            // Lấy thông tin từ cột cần thiết
            $mathongtinthue = $row['mathongtinthue'];
            $hinhanhthue = $row['hinhanhthue'];

            $diachi = $row['diachi'];
            $ngaysinh = $row['ngaysinh'];
            $cccd = $row['cccd'];
            $gioitinh = $row['gioitinh'];

            $sdt = $row['sdt'];
        }
    } else {
        $mathongtinthue = "";
        $hinhanhthue = ""; // You may set a default image path or leave it empty
        $ten = "";
        $diachi = "";
        $ngaysinh = "";
        $cccd = "";
        $gioitinh = ""; // Set a default value or leave it empty
        $email = "";
        $sdt = "";

        // Thông báo không tìm thấy thông tin
        echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
    }

    // Đóng kết nối
    $conn->close();
    
    ?>
    <?php
        echo "ma" .$mathongtinthue;
    ?>
    <div class="main">
        <?php
        include "headercustomer.php";
        ?>

        <div class="container">
            <div class="grid wide">
                <div class="content">
                    <div class="account__header">
                        <div class="account__header-avatar">
                            <img src="./img/<?php echo $hinhanhthue  ?>" alt="Ảnh đại diện" class="account__header-avatar-img">
                            <p class="account__header-verified">Đã xác thực</p>
                        </div>
                        <div class="account__header-info">
                            <h1 class="account__header-name"><?php echo $hoTen ?></h1>
                            <h3 class="account__header-address"><?php echo $diachi ?></h3>
                        </div>
                    </div>

                    <div class="account__container">
                        <div class="row">
                            <div class="col l-7 m-12 c-12">
                                <div class="account__personal">
                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Quản lý tài khoản</h2>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Tài khoản</p>
                                            <input type="text" name="" id="" class="account__personal-input" value="ltnhien" readonly>
                                        </div>
                                    </div>
                                    <a href="#" class="account__personal-change-password">Đổi mật khẩu</a>

                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Thông tin cá nhân</h2>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Ngày sinh</p>
                                            <input type="date" name="" id="" class="account__personal-input" value="<?php echo $ngaysinh   ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Số CCCD</p>
                                            <input type="text" name="" id="" class="account__personal-input" value="<?php echo $cccd ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Giới tính</p>
                                            <div class="account__personal-gender">
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="male" class="account__gender-input">
                                                    <label for="male">Nam</label>
                                                </div>
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="female" class="account__gender-input" checked>
                                                    <label for="female">Nữ</label>
                                                </div>
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="other" class="account__gender-input">
                                                    <label for="other">Khác</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Email</p>
                                            <input type="email" name="" id="" class="account__personal-input" value="<?php echo $gmail ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Điện thoại</p>
                                            <input type="text" name="" id="" class="account__personal-input" value="<?php echo $sdt ?>">
                                        </div>
                                    </div>

                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Vô hiệu hóa và khóa tài khoản</h2>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Cập nhật thông tin</h4>
                                                <p>Thông tin cá nhân</p>
                                            </span>
                                            <button class="btn account__personal-btn" onclick="disableAccount()">Cập nhật thông tin</button>
                                        </div>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Vô hiệu hóa</h4>
                                                <p>Tạm thời ẩn hồ sơ</p>
                                            </span>
                                            <button class="btn account__personal-btn">Vô hiệu hóa tài khoản</button>
                                            <div class="overlay" id="overlay">
                                                <!-- Your content for the overlay goes here -->
                                                <div class="overlay-content">
                                                    <?php
                                                    include "connect.php";
                                                    ?>
                                                    <?php
                                                    $connect = new connect;
                                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                        $insert_thongtintho = $connect->insert_thongtintho();
                                                    }
                                                    ?>
                                                    <form action="#" method="post" enctype="multipart/form-data">
                                                        <label for="id_thue">ID Thuê:</label>
                                                        <input type="text" id="id_thue" name="id_thue" value="<?php echo $id_thue ?>" required><br>

                                                        <label for="mathongtinthue">Mã Thông Tin Thuê:</label>
                                                        <input type="text" id="mathongtinthue" name="mathongtinthue" required><br>

                                                        <label for="hinhanhthue">Hình Ảnh Thuê:</label>
                                                        <input type="file" id="hinhanhthue" name="hinhanhthue" required><br>

                                                        <label for="diachi">Địa Chỉ:</label>
                                                        <input type="text" id="diachi" name="diachi" required><br>

                                                        <label for="ngaysinh">Ngày Sinh:</label>
                                                        <input type="date" id="ngaysinh" name="ngaysinh" required><br>

                                                        <label for="cccd">CCCD:</label>
                                                        <input type="text" id="cccd" name="cccd" required><br>

                                                        <label for="gioitinh">Giới Tính:</label>
                                                        <select id="gioitinh" name="gioitinh" required>
                                                            <option value="Nam">Nam</option>
                                                            <option value="Nu">Nữ</option>
                                                            <option value="Khac">Khác</option>
                                                        </select><br>

                                                        <label for="sdt">Số Điện Thoại:</label>
                                                        <input type="tel" id="sdt" name="sdt" required><br>

                                                        <input type="submit" value="Gửi">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Xóa </h4>
                                                <p>Xóa hồ sơ vĩnh viễn</p>
                                            </span>
                                            <button class="btn account__personal-btn">Xóa tài khoản</button>
                                        </div>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Đăng xuất </h4>
                                                <p>Đăng xuất tài khoản</p>
                                            </span>
                                            <button class="btn account__personal-btn"><a href="./main.php">Đăng xuất</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-5 m-12 c-12">
                                <div class="freelancer">
                                    <div class="daluu">
                                        Đã lưu tin
                                    </div>
                                    
                                    <?php
                                    $connect = new connect;
                                    $select_thuethichbaiprofile = $connect->select_thuethichbaiprofile($mathongtinthue);
                                    ?>

                                    <div class="row sm-gutter">
                                        <?php
                                        if ($select_thuethichbaiprofile) {
                                            while ($result = $select_thuethichbaiprofile->fetch_assoc()) {
                                        ?>

                                                <div class="col l-6 m-12 c-12">
                                                    <div class="freelancer-item">
                                                        <a href="info-freelancer.php?name=<?php echo urlencode($result['ten']); ?>&job=<?php echo urlencode($result['nghenghiep']); ?>&rating=4.9&reviews=<?php echo urlencode($result['gioithieu']); ?>&sdt=<?php echo urlencode($result['sdt']); ?>&email=<?php echo urlencode($result['email']); ?>&address=<?php echo urlencode($result['diachi']); ?>&mathongtintho=<?php echo urlencode($result['mathongtintho']); ?>" class="freelancer-item-warp">
                                                            <div class="freelancer-item__personal-info">
                                                                <div class="freelancer-item__avatar">
                                                                    <!-- <img src="./img/avatar-1.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img"> -->
                                                                    <div class="freelancer-item__avatar-img" style="background-image: url(./img/<?php echo $result['hinhanhtho'] ?>);"></div>
                                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>

                                                                </div>

                                                                <div class="freelancer-item__info">
                                                                    <span class="freelancer-item__title">
                                                                        <?php echo $result['ten'] ?>
                                                                    </span>
                                                                    <span class="freelancer-item__text">
                                                                        <?php echo $result['nghenghiep'] ?>
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
                                                                    <span class="freelancer-item__contact-text"><?php echo $result['sdt'] ?></span>
                                                                </div>
                                                                <div class="freelancer-item__contact-info">
                                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                                    <span class="freelancer-item__contact-text"><?php echo $result['email'] ?></span>
                                                                </div>
                                                                <div class="freelancer-item__contact-info">
                                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                                    <span class="freelancer-item__contact-text"><?php echo $result['diachi'] ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="slide-show-artwork">
                                                                <div class="freelancer-item__artwork-list">
                                                                    <div class="freelancer-item__artwork-img" style="background-image: url(./img/collection-1-1.png);" onclick="changeImage1()"></div>
                                                                    <div class="freelancer-item__artwork-img" style="background-image: url(./img/collection-1-2.png);" onclick="changeImage2()"></div>
                                                                    <div class="freelancer-item__artwork-img" style="background-image: url(./img/collection-1-3.png);" onclick="changeImage3()"></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>



                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>

                                <ul class="pagination">
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">
                                            <i class="pagination-item__icon fa-solid fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="pagination-item pagination-item--active">
                                        <a href="" class="pagination-item__link">1</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">2</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">3</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">4</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">5</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">...</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">10</a>
                                    </li>
                                    <li class="pagination-item">
                                        <a href="" class="pagination-item__link">
                                            <i class="pagination-item__icon fa-solid fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <section>
        <div class="footer">
            <div class="grid wide">
                <div class="footer_container row">
                    <div class="footer_logo col c-2 m-2 l-2">
                        <div class="footer_logo-logo">

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
    <script>
        function disableAccount() {
            // Show the overlay when the button is clicked
            document.getElementById("overlay").style.display = "flex";

            // Add a click event listener to the overlay
            document.getElementById("overlay").addEventListener("click", function(event) {
                // Check if the click is outside the overlay content
                if (event.target === this) {
                    // Hide the overlay if the click is outside
                    this.style.display = "none";
                }
            });
        }
    </script>
</body>

</html>