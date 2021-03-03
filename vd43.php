<?php
$conn = mysqli_connect('localhost', 'root', '');
if (! $conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
 $sql = "CREATE DATABASE QLMBMT ";
if (mysqli_query($conn, $sql)) {
echo "Tạo cơ sở dữ liệu thành công!";
} else {
echo "Tạo cơ sở dữ liệu thất bại!" . mysqli_error($conn);
}
mysqli_close($conn); ?>
