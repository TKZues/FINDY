<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="./img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/findy-logo.png" type="image/x-icon">
    <script src="./main.js" type="text/javascript" async></script>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./profilephoto.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <style>
        body {
            padding: 15px;
        }
    </style>
</head>

<body>

    <?php
    include "id_tho.php";
    ?>

    <?php


    // Lấy thông tin người dùng từ session
    $id_tho = $_SESSION['id_tho'];
    $hoTen = $_SESSION['hoTen'];

    // Hiển thị thông tin người dùng



    // Kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
    include "db_connection.php";

    // Truy vấn SQL để lấy thông tin từ bảng thongtinthue dựa trên id_thue
    $sql = "SELECT * FROM thongtintho WHERE id_tho = $id_tho";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng kết quả
        while ($row = $result->fetch_assoc()) {
            // Lấy thông tin từ cột cần thiết
            $mathongtintho = $row['mathongtintho'];
            $hinhanhtho = $row['hinhanhtho'];
            $diachi = $row['diachi'];
            $ngaysinh = $row['ngaysinh'];
            $cccd = $row['cccd'];
            $gioitinh = $row['gioitinh'];
            $sdt = $row['sdt'];
        }
    } else {
        $mathongtintho = "";
        $hinhanhtho = ""; // You may set a default image path or leave it empty
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
    <div class="post">
        <div id="dropArea" ondrop="dropHandler(event)" ondragover="dragOverHandler(event)">
            <img id="img_holder" src="./img/picture.png">
            <p id="dropArea_p">Kéo và thả ảnh hoặc video vào đây hoặc</p><button id="browseButton" onclick="browseFiles()">Tải lên</button>
            <input type="file" id="fileInput" accept="image/*, video/*" onchange="handleFile(this.files)">
            <img id="preview" alt="Preview" />

        </div>
        <div class='post-form'>
            <form id='postForm'>
                <label id="lbl" for='postTitle'>Tiêu đề:</label>
                <input type='text' id='postTitle' name='postTitle' required>
                <label id="lbl" for='postContent'>Nội dung:</label>
                <textarea id='postContent' name='postContent' rows='4' required></textarea>
                <button id="postButton" type='button' onclick='submitPost()'>Đăng bài</button>
                <button id="cancelButton" onclick="confirmCancel()">Hủy</button>
            </form>
        </div>
    </div>
    <div id="confirmDialog">
        <h2>Chưa lưu thay đổi</h2>
        <p>Những thay đổi của bạn sẽ mất nếu bạn thoát trang<br>
            Bạn có chắc chắn muốn thoát?
        </p>
        <div>
            <button id="OK-btn" onclick="cancelUpload()">Rời trang</button>
            <button id="Cancle-btn" onclick="closeConfirmDialog()">Hủy</button>
        </div>

    </div>

</body>
<footer></footer>

</html>