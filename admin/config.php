<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "doan_mysqli";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
  exit();
}
echo "kết nối thành công";
?>