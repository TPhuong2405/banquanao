<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=solid">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/vanlang.png">
    <title>Quần Jean nữ</title>
</head>
<body>
<?php
    include("main.php");
?>
<!-- --------------cartegory------------------------ -->
<section>
<form method="POST" action="giohang.php">
<div class="cartegory-content">
    <div class="cartegory-item1">
        <img src="images/quanjeannu1.jpg" alt="">
        <h1 type="text" name="tendomua">Quần Jean nữ đẹp</h1>
        <p type="text" name="giadomua">300.000<sup>đ</sup></p>
        <button type="submit" name="muahang" value="MUA HÀNG"><i class="fa-solid fa-cart-shopping"></i> <a href="giohang.php"><p>Mua hàng</p></a></button>
    </div>
    <div class="cartegory-item1">
        <img src="images/quanjeannu2.jpg" alt="">
        <h1 type="text" name="tendomua">Quần Jean nữ đẹp</h1>
        <p type="text" name="giadomua">350.000<sup>đ</sup></p>
        <button type="submit" name="muahang"><i class="fa-solid fa-cart-shopping"></i> <a href="giohang.php"><p>Mua hàng</p></a></button>
    </div>
</div>
</form>



</section>

<!-- ------------------------footer----------------------------- -->
<?php
    include("footer.php");
?>
</body>
</html>