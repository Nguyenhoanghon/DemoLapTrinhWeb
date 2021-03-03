<?php
$conn = mysqli_connect('localhost', 'root', '');
if (! $conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
mysqli_select_db($conn,'QLMBMT');
$sql = "SELECT MaLSP, TenLSP FROM LoaiSanPham";
$result = mysqli_query($conn, $sql);
// Mảng số: 
//while($row = mysqli_fetch_array($result, MYSQLI_NUM))
//    echo $row[0] . $row[1]."<br>";

// Mảng kết hợp
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo $row['MaLSP'] . $row['TenLSP'];


// Mảng tự do: Có thể dùng chỉ số hoặc tên trường.
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
echo $row[0] . $row[1];
//hoặc
echo $row['MaLSP'] . $row['TenLSP'];
mysqli_close($conn);
?>

