<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../order-management.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
    include "../id_thue.php";
?>
<?php


// Các công việc khác cần làm trên trang mainphoto.php

// echo "ID của Thợ: " . $id_thue;
// echo "ID của Thợ: " . $hoTen;

?>

<?php
    include "../connect.php";
?>
<?php 
    $connect = new connect;
    $select_sanpham = $connect -> select_sanpham($id_thue); //
    $emptyImage = '<img src="../img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
?>

        
                                <?php
                                    if($select_sanpham){
                                        while($result = $select_sanpham->fetch_assoc()){
                                            $uniqueId = uniqid();  
                                            $dataDisplayed = true;
                                        $anhtho = $result['hinhanhtho'];    
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $drive = $result['drive'];
                                        $mathongtintho = $result['mathongtintho'];
                                        $ma_posttimtho = $result['ma_posttimtho'];
                                        $mathosanpham = $result['mathosanpham'];
                                ?>
                            <div class="manageroder_content  col c-12 m-12 l-12">
                                <div class="order">
                                <div class="order__avatar">
                        <img src="../img/<?php echo $anhtho  ?>" alt="Ảnh đại diện" class="order__avatar-img">
                    </div>

                    <div class="order__info">
                        <span class="order__name">
                            <?php echo $tentho ?>
                        </span>
                        <span class="order__text">
                            <i class="order__text-icon fa-solid fa-location-dot"></i>
                            <?php echo $diadiem ?>
                        </span>
                        <span class="order__text">
                            <i class="order__text-icon fa-solid fa-calendar-days"></i>
                            <?php echo $thoigian ?>
                        </span>
                        <span class="order__text">
                            <i class="order__text-icon fa-regular fa-clock"></i>
                            16h:30p
                        </span>
                    </div>

                    <div class="order__info">
                        <span class="order__title">
                            Mã đơn hàng:
                            <strong><?php echo $mathosanpham ?></strong>
                        </span>
                        <span class="order__title">
                            Phong cách:
                            <strong><?php echo $phongcach ?></strong>
                        </span>
                        <span class="order__title">
                            Tổng giá trị:
                            <strong><?php echo $gia ?></strong>
                            <strong>đ</strong>
                        </span>
                    </div>
                                    <div class="manageroder_content-items--button col c-2 m-2 l-2">
                                    <button class="btn order-btn" onclick="toggleAdditionalInfo('<?php echo $uniqueId; ?>', '<?php echo $diadiem; ?>',
                        '<?php echo $gia; ?>',
                        '<?php echo $thoigian; ?>'
                        )">Nhận sản phẩm</button>                                        
                                    </div>
                                </div>
</div>        
<div id="additional-info_<?php echo $uniqueId; ?>" class="additional-info" style="display: none;">
            <div class="alone">
                <form action="" method="POST">
                    <!-- <input type="text" name="inputdrive" id="inputdrive_<?php echo $uniqueId; ?>" placeholder="Nhập link google drive chứa sản phẩm ..."> -->
                    <a href="<?php echo $drive ?> " target="_blank"><button class="button_additional" type="button">Xem hình ảnh</button></a>
                    
                </form>
            </div>
            <div class="flex_botton">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (isset($_POST['submit_yeucauchinhsua'])) {
                                $insert_yeucauchinhsua = $connect->insert_yeucauchinhsua();
                                if ($insert_yeucauchinhsua){
                                    $delete_thochosanpham = $connect-> delete_thochosanpham($ma_posttimtho, $mathongtintho);
                                    if ($delete_thochosanpham){
                                        $delete_thosanpham = $connect-> delete_thosanpham($ma_posttimtho, $mathongtintho);
                                    }
                                    else{
                                        echo "Error";
                                    }
                                }else{
                                    echo "Error";
                                }
                            } elseif (isset($_POST['submit_danhgia'])) {
                                $insert_danhgia = $connect->insert_danhgia();
                                if($insert_danhgia){
                                    $delete_thochosanpham = $connect-> delete_thochosanpham($ma_posttimtho, $mathongtintho);
                                    if ($delete_thochosanpham){
                                        $delete_thosanpham = $connect-> delete_thosanpham($ma_posttimtho, $mathongtintho);
                                        if ($delete_thosanpham){
                                            $insert_dathanhtoan = $connect-> insert_dathanhtoan();
                                        }
                                        else{
                                            echo "Error";
                                        }
                                    }
                                }
                                else{
                                    echo "Error";
                                }
                            }
                        }
                        ?>
                        <?php
                            // echo "d" .$ma_posttimtho;
                            // echo "d" .$mathongtintho;
                        ?>
                    <form action="" method="POST">
                    <input type="text" style="display: none;" name="driveyc" id="" value="<?php echo $drive ?>">
                    <input type="text" style="display: none;" name="mathongtinthoyc" id="" value="<?php echo $mathongtintho ?>">
                    <input type="text" style="display: none;" name="ma_posttimthoyc" id="" value="<?php echo $ma_posttimtho ?>">
                    <button class="button_additional" type="submit" name="submit_yeucauchinhsua">Gửi yêu cầu chỉnh sửa</button>
                    
                    </form>

               
                    
                    <form action="" method="POST">
                        <input type="text" style="display: none;" name="drive" id="" value="<?php echo $drive ?>">
                        <input type="text" style="display: none;" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">
                        <input type="text" style="display: none;" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                        <button class="button_additional" type="submit" name="submit_danhgia">Đã nhận sản phẩm</button>
                    </form>
                    <form action="" method="POST">
                        <textarea name="post-job__form-description" id="post-job__form-description" class="post-job__form-input" cols="1" rows="5" style="width: 60%;"></textarea>
                        <input type="text" style="display: none;" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">
                        <input type="text" style="display: none;" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                        <button class="button_additional" type="submit" name="submit_danhgia">Báo cáo</button>
                    </form>
                   
            </div>
</div>

<?php 
                                        }
                                    }

?>
<?php
    if (!$dataDisplayed) {
        echo $emptyImage;
    }
?>
<script>
    function toggleAdditionalInfo(uniqueId, diadiem, gia, thoigian) {
        var additionalInfoDiv = document.getElementById('additional-info_' + uniqueId);

        // Check the current visibility state
        var isVisible = additionalInfoDiv.style.display === 'block';

        // Toggle the visibility
        additionalInfoDiv.style.display = isVisible ? 'none' : 'block';

        // If visible, populate and show the additional info
        if (!isVisible) {
            additionalInfoDiv.innerHTML = `
                <p>Địa điểm: ${diadiem}</p>
                <p>Thời gian: ${thoigian}</p>
                <p>Giá: ${gia}</p>
                <p>Giá: ${mathogiaosanpham}</p>
                // <input type="text" name="inputdrive_<?php echo $uniqueId; ?>" id="inputdrive_${uniqueId}" placeholder="Nhập link google drive chứa sản phẩm ...">
                <a href="<?php echo $drive ?> " target="_blank"><button class="button_additional" type="button">Xem hình ảnh</button></a>
                <button class="button_additional" type="submit">Gửi yêu cầu chỉnh sửa</button>
                <button class="button_additional" type="submit">Đã nhận sản phẩm</button>

            `;
        }
    }
</script>
</body>
</html>