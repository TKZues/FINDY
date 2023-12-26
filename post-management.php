<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findy</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./post-management.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>
<body>
<?php
    include "id_thue.php";
?>
<?php
include "db_connection.php";

$sql = "SELECT DISTINCT post_timtho.tenposttimtho, post_timtho.thoigian, post_timtho.diadiem, 
thongtintho.tentho, thongtintho.diachi, thongtintho.ngaysinh 
FROM post_timtho

INNER JOIN quanlybaidang ON quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho
INNER JOIN thongtintho ON quanlybaidang.ma_thongtintho = thongtintho.mathongtintho
INNER JOIN thongtinthue ON post_timtho.mathongtinthue = thongtinthue.mathongtinthue
WHERE thongtinthue.id_thue = $id_thue;
";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Hiển thị thông tin từng bài đăng và thông tin thợ
    while ($row = $result->fetch_assoc()) {
        // echo "Tên bài đăng: " . $row["tenposttimtho"] . "<br>";
        // echo "Thời gian: " . $row["thoigian"] . "<br>";
        // echo "Địa điểm: " . $row["diadiem"] . "<br>";
        // echo "Tên thợ: " . $row["tentho"] . "<br>";
        // echo "Địa chỉ thợ: " . $row["diachi"] . "<br>";
        // echo "Ngày sinh thợ: " . $row["ngaysinh"] . "<br><hr>";
    } 
} else {
    echo "Không có dữ liệu.";
}
// Đóng kết nối
$conn->close();
// Các công việc khác cần làm trên trang mainphoto.php

echo "ID của Thợ: " . $id_thue;
echo "ID của Thợ: " . $hoTen;

?>
    <div class="main">
    <?php
            include "headercustomer.php";
        ?>  

        <div class="post-management-container">
            <div class="grid wide">
                <div class="post-management-content">
                    <div class="post">
                        <h1 class="post-heading">Danh sách bài đăng</h1>
                        <div class="row">
                            <?php 
                                include "connect.php"
                            ?>
                            <?php
                                    $connect = new connect;        
                                    $select_posttimtho = $connect ->select_posttimtho($id_thue);
                                ?>
                            <?php
                                    if($select_posttimtho){
                                        while($result = $select_posttimtho->fetch_assoc()){
                                            $ma_posttimtho = $result['ma_posttimtho'];
                                            $mathongtinthue = $result['mathongtinthue'];
                                            
                            ?>
                            <div class="col l-6 m-12 c-12">
                                <div class="post-content">
                                    <h3 class="post-content__title"><?php echo $result['tenposttimtho'] ?></h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name"><?php echo $hoTen ?></span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            30 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price"><?php echo $result['gia'] ?></span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                    </div>
                                    <p class="post-content__text">
                                        <?php echo $result['motachitiet'] ?>
                                    </p>
                                    <div class="post-content__details">
                                        <a href="#" class="post-content__detail"><?php echo $result['diadiem'] ?></a>
                                        <a href="#" class="post-content__detail"><?php echo $result['ma_posttimtho']  ?></a>
                                        <a href="#" class="post-content__detail">Ảnh cưới</a>
                                    </div>
                                </div>
                                <div class="candidate">
                                    <h2 class="candidate__heading">Danh sách thợ đã ứng tuyển</h2>
                                    <?php   
                                        include "db_connection.php";
                                    ?>
                                    <?php
                                       
                                        $result_thongtintho = $connect ->result_thongtintho($ma_posttimtho);
                                    ?>
                                    <?php   
                                    if ($result_thongtintho) {
                                        // Process the results, for example:
                                        while ($row_thongtintho = $result_thongtintho->fetch_assoc()) {
                                            $mathongtintho = $row_thongtintho['mathongtintho'];
                                            $tentho = $row_thongtintho['hoTen'];
                                            $hinhanhtho = $row_thongtintho['hinhanhtho'];
                                            $maquanlybaidang = $row_thongtintho['ma_quanlybaidang'];
                                            echo  'maqly'.$maquanlybaidang
                                    ?>
                                        <div class="candidate__list c-12 m-12 l-12">
                                            <div class="candidate__resume">
                                                <div class="candidate__resume-warp">
                                                    <div class="candidate__avatar">
                                                        <img src="./img/<?php echo $hinhanhtho  ?>" alt="Ảnh đại diện" class="candidate__avatar-img">
                                                        <p class="candidate__avatar-text">Uy tín: 100</p>
                                                    </div>
                                                    
                                                    <div class="candidate__info">
                                                        <span class="candidate__title">
                                                            <?php echo $tentho  ?>
                                                        </span>
                                                        <span class="candidate__text">
                                                            Nhiếp ảnh gia tự do
                                                        </span>
                                                        <div class="star-rating">
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                            <i class="star-rating--gold fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="candidate__rating">
                                                            <strong>4.9</strong>
                                                            <span>(234 đánh giá)</span>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="candidate__control">
                                                   
                                                   
                                                    <?php
                                                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                            $connect = new connect;
                                                        
                                                            if (isset($_POST['accept'])) {
                                                                // Handle accept action
                                                                $insert_thanhtoancoc = $connect->insert_thanhtoancoc();
                                                                if ($insert_thanhtoancoc) {
                                                                    // If the insert is successful, proceed to delete from table2
                                                                    $maquanlybaidang = $_POST['maquanlybaidang'];
                                                                    $delete_quanlybaidang = $connect->delete_quanlybaidang($maquanlybaidang);
                                                                }else{
                                                                    echo "Error";
                                                                } 


                                                            } elseif (isset($_POST['reject'])) {
                                                                // Handle reject action
                                                                $maquanlybaidang = $_POST['maquanlybaidang'];
                                                        
                                                                // Call the method to delete the record
                                                                $delete_quanlybaidang = $connect->delete_quanlybaidang($maquanlybaidang);
                                                            }
                                                        }
                                                        
                                                    ?>
                                                        <form action="" method="POST">
                                                            <div class="form_qlybaidang" style= "display:none">
                                                            <input type="hidden" name="maquanlybaidang" value="<?php echo $maquanlybaidang ?>">

                                                            <input name ="maposttimtho"  type="text" value ="<?php echo $ma_posttimtho ?>" >
                                                            <input name ="mathongtintho" type="text" value ="<?php echo $mathongtintho ?>">
                                                            </div>
                                                        <button type = "submit" name="accept" class="btn btn--primary candidate__control-btn">Chấp nhận</button>
                                                        

                                                        </form>
                                                        <form action="" method="POST">
                                                            <!-- Add hidden input for maquanlybaidang -->
                                                            <input type="hidden" name="maquanlybaidang" value="<?php echo $maquanlybaidang ?>">
                                                            <button type="submit" name="reject" class="btn btn--primary candidate__control-btn">Từ chối</button>
                                                        </form>

                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <?php
                                    }
                                }
                            ?>
                                </div>
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
                            <a href=""><li><img src="./img/app-store.svg" alt=""></li></a>
                            <a href=""><li><img src="./img/google-play.svg" alt=""></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
</body>
</html>