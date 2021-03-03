<?php
$conn = mysqli_connect('localhost', 'root', '');
if (! $conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
 $sql = " UPDATE LoaiSanPham SET TenLSP = 'Máy fax' WHERE MaLSP = 'LSP006' ";
 
mysqli_select_db($conn,'QLMBMT');
if (mysqli_query($conn, $sql))
{
    echo "Successful :))";
}
else
{
    echo "Fail :(( " . mysqli_error($conn);
}
/*
if(mysqli_query($conn,"DROP TABLE Persons"))
    echo "da xoa bang Preson";
else
    echo "Khong xoa dc bang Person";
*/
mysqli_close($conn);
?>
