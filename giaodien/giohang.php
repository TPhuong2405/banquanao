<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=solid">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/vanlang.png">
    <title>Giỏ hàng</title>
    <style>
        .tengiohang {
        align-items: center;
        justify-content: center;
        display: flex;
        }
    </style>
</head>
<body>
<?php
    include("main.php");
?>
<!-- --------------------giỏ hàng ---------------------------- -->
<section class="cart">
    <div class="container2">
        <div class="cart-container2">
            <div class="cart-container2-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td><img src="images/aothun1.jpg" alt=""></td>
                        <td><p>Áo thun nữ đẹp</p></td>
                        <td><p>300.000<sup>đ</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                </table>
            </div>
            <div class="cart-container2-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>TỔNG TIỀN HÀNG</td>
                        <td><p>300.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>TẠM TÍNH</td>
                        <td><p style="color: black; font-weight: bold">300.000<sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="cart-container2-right-button">
                    <button><a href="index.php">TIẾP TỤC MUA SẮM</a></button>
                    <BUTton><a href="diachi.php">TIẾP THEO</a></BUTton>
                </div>
            </div>
        </div>
    </div>
    <!-- <h1 class="tengiohang">GIỎ HÀNG</h1>
    <h3>hãy mua hàng đi </h3> -->
</section>


<!-- ------------------------footer----------------------------- -->
<?php
    include("footer.php");
?>
</body>
</html>