<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./manageroder.css">
    <link rel="stylesheet" href="./base.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "id_tho.php";
?>
<?php
    include "connect.php";
?>
<?php 

    $connect = new connect;
    $select_thuchientho = $connect -> select_thuchientho($id_tho); //
?>

<div class="row">
<?php
                                    if($select_thuchientho){
                                        while($result = $select_thuchientho->fetch_assoc()){
                                        $anhtho = $result['hinhanhtho'];    
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];

                                            
                                ?>
                        <div class="manageroder_content  col c-12 m-6 l-6">
                                <div class="">
                                    <div class="manageroder_content-items--avatar col c-2 m-2 l-2">
                                        <img src="./img/avatar1.jpg" alt="">
                                    </div>
                                    <div class="manageroder_content-items--mid col c-7 m-7 l-7">
                                        <div class="name">
                                        <span>Họ tên: </span><?php echo $tentho ?>
                                        </div>
                                        <div class="address">
                                            <span>Địa điểm: </span><?php echo $diadiem ?>
                                        </div>
                                        <div class="time">
                                            <span>Thời gian: </span><?php echo $thoigian ?>
                                        </div>
                                        <div class="style">
                                            <span>Phong cách: </span><?php echo $phongcach ?>
                                        </div>
                                        <div class="price">
                                            <span>Giá: </span><?php echo $gia ?> <span>đ</span>
                                        </div>
                                        
                                    </div>
                                    <div class="manageroder_content-items--button col c-3 m-3 l-3">
                                        <!-- <button type="button">Thực hiện</button> -->
                                        <a href="">Xem chi tiết</a>
                                        <button style="padding:0 3px;" type="submit">Giao sản phẩm</button>
                                    </div>
                                </div>
                        </div>

                        <?php 
                                        }
                                    }

?>
                        
                        
                    
</div>
</body>
</html>