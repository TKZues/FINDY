<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./mainphoto.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY</title>
</head>
<body>
<!-- -----------chatbox------------ -->
<?php
    include "id_tho.php";
?>


<?php
// Các công việc khác cần làm trên trang mainphoto.php
echo "ID của Thợ: " . $id_tho;
echo "ID của Thợ: " . $hoTen;
?>

<?php
        include "headerphoto1.php";
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
                    
                    <div class="filter_bottom col c-4 m-4 l-4">
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
                            <!-- <div class="filter_bottom-time col c-12 m-12 l-12">
                                <select name="" id="" class="booking__input">
                                        <option value="">Chọn giờ</option>
                                        <option value="10 giờ">10 giờ</option>
                                        <option value="11 giờ">11 giờ</option>
                                        <option value="12 giờ">12 giờ</option>
                                        <option value="13 giờ">13 giờ</option>
                                        <option value="14 giờ">14 giờ</option>
                                        <option value="15 giờ">15 giờ</option>
                                        <option value="16 giờ">16 giờ</option>
                                        <option value="17 giờ">17 giờ</option>
                                        <option value="18 giờ">18 giờ</option>
                                        <option value="19 giờ">19 giờ</option>
                                        <option value="20 giờ">20 giờ</option>
                                        <option value="21 giờ">21 giờ</option>
                                        <option value="22 giờ">22 giờ</option>
                                </select>
                            </div> -->
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
                            $select_postjob = $connect ->select_postjob();
                            
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
                            <a href="./photoclick.php?tenposttimtho=<?php echo urlencode($result['tenposttimtho']); ?>&phongcach=<?php echo urlencode($result['phongcach']); ?>&mathongtinthue=<?php echo urlencode($result['mathongtinthue']); ?>&thoigian=<?php echo urlencode($result['thoigian']); ?>&gia=<?php echo urlencode($result['gia']); ?>&sukien=<?php echo urlencode($result['sukien']); ?>&diadiem=<?php echo urlencode($result['diadiem']); ?>&motachitiet=<?php echo urlencode($result['motachitiet']); ?>" class="col c-12 m-6 l-6">
                                <div class="jobbest-items ">
                                    <div class="jobbest-mid-top">
                                        <div class="row">
                                            
                                            <div class="jobbest-mid-top--left col c-3 m-3 l-3">
                                                <img src="./img/<?php echo $hinhanhthue ?>" style="width:80px;height:80px;border-radius:50%" alt="">
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
                            <a href=""><li>Dự án</li></a>
                            <a href=""><li>Cuộc thi</li></a>
                            <a href=""><li>Thành viên</li></a>
                            <a href=""><li>Quản lý dự án</li></a>
                            <a href=""><li>Hình ảnh khắp nơi</li></a>
                            <a href=""><li>Xác thực</li></a>
                        </ul>

                    </div>
                    <div class="footer_introduce col c-2 m-2 l-2">
                        <h1>Giới thiệu</h1>
                        <ul>
                            <a href=""><li>Về chúng tôi</li></a>
                            <a href=""><li>Cách thức hoạt động</li></a>
                            <a href=""><li>Bảo mật</li></a>
                            <a href=""><li>Nhà đầu tư</li></a>
                            <a href=""><li>Sơ đồ trang</li></a>
                            <a href=""><li>Tin tức</li></a>
                            <a href=""><li>Đội ngũ</li></a>
                            <a href=""><li>Công việc</li></a>
                        </ul>
                    </div>
                    <div class="footer_rules col c-2 m-2 l-2">
                        <h1>Điều khoản</h1>
                        <ul>
                            <a href=""><li>Chính sách bảo mật</li></a>
                            <a href=""><li>Điều khoản và điều kiện</li></a>
                            <a href=""><li>Chính sách bản quyền</li></a>
                            <a href=""><li>Quy tắc ứng xử</li></a>
                            <a href=""><li>Các loại phí</li></a>
                        </ul>
                    </div>
                    <div class="footer_bussiness col c-2 m-2 l-2">
                        <h1>Đối tác</h1>
                        <ul>
                            <a href=""><li>Escrow.com</li></a>
                            <a href=""><li>Loadshift</li></a>
                            <a href=""><li>Warrior Forum</li></a>
                        </ul>
                    </div>
                    <div class="footer_app col c-2 m-2 l-2">
                        <h1>Ứng dụng</h1>
                        <ul>
                            <a href=""><li><img src="./assets/img/app-store.svg" alt=""></li></a>
                            <a href=""><li><img src="./assets/img/google-play.svg" alt=""></li></a>
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

    <div class="modal">
        <div class="modal__container">
            <!-- Register form -->
            
            <form class="account_form hidden" id="register-form" method="POST">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng ký</h3>

                    <div class="account_form__form">
                        <input name="hoTen"  type="text" class="account_form__input" placeholder="Họ và tên">
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
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g data-v-48748210=""><path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path> <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path> <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path> <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path> <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path></g></svg>
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
            
            <form class="account_form hidden" id="login-form" method = "POST" action = "mainphoto.php">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng nhập</h3>

                    <div class="account_form__form">
                        <input name="Emailuser"  type="email" class="account_form__input" placeholder="Email">
                        <input name="Passworduser" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    </div>

                    <button tyle="submit" class="btn btn--primary account_form__btn">Đăng nhập</button>
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
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g data-v-48748210=""><path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path> <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path> <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path> <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path> <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path></g></svg>
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
    
    <script src="./main.js"></script>
</body>
</html>