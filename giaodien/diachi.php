<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=solid">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/vanlang.png">
    <title>Địa chỉ</title>
</head>
<body>
<?php
    include("main.php");
?>
<!-- ----------------------------giỏ hàng---------------------------------- -->
<section class="container">
    <div class="delevery-content">
        <div class="delevery-content-center">
            <p>Thông tin giao hàng</p>
            <div class="delevery-content-dangnhap">
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                <p>Đăng nhập (Nếu bạn đã có tài khoản)</p> 
            </div>
            <div class="delevery-content-dangky">
                <i class="fa-solid fa-plus"></i>
                <p>Đăng ký (Tạo mới tài khoản với thông tin bên dưới)</p>
            </div>
            <div class="delevery-content-input-top">
                <div class="delevery-content-input-top-item">
                    <label for="">Họ tên <span style="color: red;">*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="delevery-content-input-top-item">
                    <label for="">Điện thoại <span style="color: red;">*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="delevery-content-input-top-item">
                    <label for="">Tỉnh/Tp <span style="color: red;">*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="delevery-content-input-top-item">
                    <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="delevery-content-input-top-item">
                    <label for="">Phường/Xã <span style="color: red;">*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="delevery-content-input-top-item">
                    <label for="">Địa chỉ <span style="color: red;">*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="delevery-content-button">
                    <a href="giohang.php"><p><< Quay lại giỏ hàng</p></a>
                    <button><p style="font-weight: bold;"><a href="thanhtoan.php">TIẾP THEO</a></p></button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ------------------------footer----------------------------- -->
<?php
    include("footer.php");
?>
</body>
</html>