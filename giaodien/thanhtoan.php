<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=solid">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/vanlang.png">
    <title>THANH TOÁN</title>
</head>
<body>
<?php
    include("main.php");
?>
<!-- ----------------------------thanh toán---------------------------------- -->
<section class="payment">
    <div class="container">
        <div class="payment-content-center">
            <div class="payment-content-method-delivery">
                <p style="font-weight: bold;">CHỌN PHƯƠNG THỨC THANH TOÁN</p>
                <div class="payment-content-method-delivery-item">
                    <input type="radio" name="methord-payment" id=""><label for="">Thanh toán khi nhận hàng</label>
                </div>
            
                <div class="payment-content-method-delivery-item">
                    <input type="radio" name="methord-payment" id=""><label for="">Thanh toán bằng thẻ ATM</label>
                </div>
                <div class="payment-content-method-delivery-item-img">
                    <img src="images/nganhangatm.png" alt="">
                </div>

                <div class="payment-content-method-delivery-item">
                    <input type="radio" name="methord-payment" id=""><label for="">Thanh toán bằng Momo</label>
                </div>
                <div class="payment-content-method-delivery-item-imgg">
                    <img src="images/momo.png" alt="">
                </div>
            </div>
        </div>
        <div class="payment-content-center-payment">
            <button style="font-size: 30px;"><a href="camon.php">THANH TOÁN</a></button>
        </div>
    </div>
</section>


<!-- ------------------------footer----------------------------- -->
<?php
    include("footer.php");
?>
</body>
</html>