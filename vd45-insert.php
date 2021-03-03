<?php
$conn = mysqli_connect('localhost', 'root', '');
if (! $conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
 $sql = "INSERT INTO loaisanpham (MaLSP,TenLSP, DienGiai) 
 VALUES ('LSP003','Bộ nguồn máy','Các loại bộ nguồn máy'),('LSP004','Bộ nguồn máy','Các loại bộ nguồn máy') ";
 
mysqli_select_db($conn,'QLMBMT');
if (mysqli_query($conn, $sql))
{
    echo "Successful :))";
}
else
{
    echo "Fail :(( " . mysqli_error($conn);
}
mysqli_close($conn);
?>
