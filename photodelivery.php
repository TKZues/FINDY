<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./manageroder.css">
    <link rel="stylesheet" href="./css/base.css">
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
    $select_nhansanphamtho = $connect -> select_nhansanphamtho($id_tho); //
?>

<!-- <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Thông tin chi tiết</h2>
        <p>Địa chỉ: <span id="modalDiachi"></span></p>
    <p>Giá: <span id="modalGia"></span></p>
    <p>Thời gian: <span id="modalThoiGian"></span></p>
        <label for="driveLink">Enter Google Drive link:</label>
        <input type="text" id="driveLink" name="driveLink" placeholder="Paste link here">
        <br>
        <button onclick="closeModal()">Cancel</button>
        <button onclick="submitDriveLink()">Submit</button>
    </div>
</div> -->

<!-- Overlay HTML -->
<div id="myOverlay" class="overlay"></div>

<div class="row">
<?php
                                    if($select_nhansanphamtho){
                                        while($result = $select_nhansanphamtho->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];  
                                        $uniqueId = uniqid();  
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathogiaosanpham = $result['mathogiaosanpham'];
                                            
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/<?php  echo $anhtho ?>" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        <?php echo $tentho  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        <?php echo $diadiem  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        <?php echo $thoigian  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong><?php echo $mathogiaosanpham ?> </strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong><?php echo $phongcach  ?></strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong><?php echo $gia ?></strong>
                    </span>
                </div>

                <div class="order__info">
                <button class="btn order-btn" onclick="toggleAdditionalInfo('<?php echo $uniqueId; ?>', '<?php echo $diadiem; ?>',
                        '<?php echo $gia; ?>',
                        '<?php echo $thoigian; ?>')">Giao sản phẩm</button>                </div>
                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
        <div id="additional-info_<?php echo $uniqueId; ?>" class="additional-info" style="display: none;">
            <input type="text" id="input_<?php echo $uniqueId; ?>" placeholder="Enter something...">
        </div> <!-- New container for additional info -->
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
                <input type="text" id="input_${uniqueId}" placeholder="Enter something...">
            `;
        }
    }
</script>
<!-- <script>
    function toggleAdditionalInfo(diadiem, gia, thoigian) {
        var additionalInfoDiv = document.querySelector('.additional-info');

        // Check if additional info is already visible
        if (additionalInfoDiv.style.display === 'block') {
            // If visible, hide it
            additionalInfoDiv.style.display = 'none';
        } else {
            // If hidden, populate and show it
            additionalInfoDiv.innerHTML = `
                <p>Địa điểm: ${diadiem}</p>
                <p>Thời gian: ${thoigian}</p>
                <p>Giá: ${gia}</p>
            `;
            additionalInfoDiv.style.display = 'block';
        }
    }
</script> -->
<!-- <script>
    function toggleAdditionalInfo(button, diadiem, gia, thoigian) {
        var orderContainer = button.closest('.order');
        var additionalInfoDiv = orderContainer.querySelector('.additional-info');

        // Check if additional info is already visible
        if (additionalInfoDiv.style.display === 'block') {
            // If visible, hide it
            additionalInfoDiv.style.display = 'none';
        } else {
            // If hidden, populate and show it
            additionalInfoDiv.innerHTML = `
                <p>Địa điểm: ${diadiem}</p>
                <p>Thời gian: ${thoigian}</p>
                <p>Giá: ${gia}</p>
            `;
            additionalInfoDiv.style.display = 'block';
        }
    }
</script> -->
<!-- <script>
    // Function to display the modal
    function openModal(diadiem, gia, thoigian) {
        document.getElementById('myModal').style.display = 'block';
        document.getElementById('myOverlay').style.display = 'block';
        document.getElementById('modalDiachi').innerText = diadiem;
    document.getElementById('modalGia').innerText = gia;
    document.getElementById('modalThoiGian').innerText = thoigian;    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
        document.getElementById('myOverlay').style.display = 'none';
    }
</script> -->
</body>
</html>