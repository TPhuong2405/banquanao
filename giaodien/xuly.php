<?php
    include("../admin/config.php");
    $tendo = $_POST['tendomua'];
    $giado = $_POST['giadomua'];
    if(isset($_POST['muahang'])) {
        $sql_mua = "INSERT INTO tbl_mua(tendomua,giadomua) VALUE('".$tendomua."','".$giadomua."')";
        mysqli_query($mysqli,$sql_mua);
        header('location:index.php');
    }
// require '../admin/config.php';
// if(isset($_POST['muahang'])) {
//     echo "da submid";
// }

// echo "<pre>";
// print_r($_POST);
?>