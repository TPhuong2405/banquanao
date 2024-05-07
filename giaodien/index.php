<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=solid">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/vanlang.png">
    <title>ThanhPhuong-Project</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include("main.php");
            include("slider.php");
            include("app-container.php");
            include("footer.php");
        ?>
    </div>
</body>
<!-- <script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelectorAll(".aspect-ratio-169")
    let imgNuber = imgPosition.length
    let index = 0
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
    })
    function imgSlide (){
        index++;
        console.log(index)
        if (index>=imgNuber) {index=0}
        imgContainer.style.left = "-" +index*100+ "%"
    }
    setInterval(imgSlide,5000)
</script> -->
</html>