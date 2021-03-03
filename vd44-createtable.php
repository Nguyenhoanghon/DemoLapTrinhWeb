<?php
$conn = mysqli_connect('localhost', 'root', '');
if (! $conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
 $sql = " CREATE TABLE IF NOT EXISTS LoaiSanPham (
   MaLSP VARCHAR(10) NOT NULL,
   TenLSP VARCHAR(45) NOT NULL,
   DienGiai VARCHAR(45) NOT NULL,
   PRIMARY KEY (MaLSP))
";
mysqli_select_db($conn,'QLMBMT');
if (mysqli_query($conn, $sql))
{
    echo "Tạo cơ sở dữ liệu thành công!";
}
else
{
    echo "Tạo cơ sở dữ liệu thất bại!" . mysqli_error($conn);
}
/*
if(mysqli_query($conn,"DROP TABLE Persons"))
    echo "da xoa bang Preson";
else
    echo "Khong xoa dc bang Person";
*/
mysqli_close($conn);
?>
