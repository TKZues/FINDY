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
?>

        
                                <?php
                                    if($select_sanpham){
                                        while($result = $select_sanpham->fetch_assoc()){
                                            $uniqueId = uniqid();  
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
                                            
                                ?>
                            <div class="manageroder_content  col c-12 m-12 l-12">
                                <div class="row">
                                    <div class="manageroder_content-items--avatar col c-2 m-2 l-2">
                                        <img style="width:100px; height:100px; " src="../img/<?php echo $anhtho ?>" alt="">
                                    </div>
                                    <div class="manageroder_content-items--mid col c-7 m-7 l-7">
                                        <div class="name">
                                            <?php echo $tentho ?>
                                        </div>
                                        <div class="address">
                                            <span>Địa điểm: </span><?php echo $diadiem ?>
                                        </div>
                                        <div class="time">
                                            <span>Thời gian: </span><?php echo $thoigian ?>
                                        </div>
                                        <div class="style">
                                            <span>Phong cách: </span><?php  echo $phongcach ?>
                                        </div>
                                        <div class="price">
                                            <span>Cọc: </span><?php echo $gia ?> <span>đ</span>
                                        </div>
                                        
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
            <form action="" method="POST">
                <!-- <input type="text" name="inputdrive" id="inputdrive_<?php echo $uniqueId; ?>" placeholder="Nhập link google drive chứa sản phẩm ..."> -->
                <a href="<?php echo $drive ?> " target="_blank"><button class="button_additional" type="button">Xem hình ảnh</button></a>
                
            </form>
            <div class="flex_botton">
                    <button class="button_additional" type="submit">Gửi yêu cầu chỉnh sửa</button>
                    <?php
                    if($_SERVER['REQUEST_METHOD'] === 'POST'){
                                    $insert_danhgia = $connect-> insert_danhgia();
                                    }
                    ?>
                    <form action="" method="POST">
                        <input type="text" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">
                        <input type="text" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                        <button class="button_additional" type="submit">Đã nhận sản phẩm</button>
                    </form>
                   
            </div>
</div>

<?php 
                                        }
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