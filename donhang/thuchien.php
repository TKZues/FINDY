<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../base.css">
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

echo "ID của Thợ: " . $id_thue;
echo "ID của Thợ: " . $hoTen;

?>

<?php
    include "../connect.php";
?>
<?php 
    $connect = new connect;
    $select_thuchien = $connect -> select_thuchien($id_thue); //
?>

        
                                <?php
                                    if($select_thuchien){
                                        while($result = $select_thuchien->fetch_assoc()){
                                        $anhtho = $result['hinhanhtho'];    
                                        $tentho = $result['tentho'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];

                                            
                                ?>
                            <div class="manageroder_content  col c-12 m-12 l-12">
                                <div class="row">
                                    <div class="manageroder_content-items--avatar col c-2 m-2 l-2">
                                        <img style="width:80%" src="../img/<?php echo $anhtho ?>" alt="">
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
                                        <a  href="../deposit-payment.php?name=<?php echo urlencode($tentho); ?>&diadiem=<?php echo urlencode($diadiem); ?>&thoigian=<?php echo urlencode($thoigian); ?>&diachi=<?php echo urlencode($sukien); ?>&gia=<?php echo urlencode($gia); ?>" target = "_blank" ><button type="button">Đang thực hiện</button></a>
                                        
                                    </div>
                                </div>
</div>
<?php 
                                        }
                                    }

?>
</body>
</html>