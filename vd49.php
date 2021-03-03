<?php
$link = mysqli_connect("localhost","root","","QLMBMT") or  
    die("Could not connect: " . mysql_error()); 
$str_select = "select * from LoaiSanPham";
mysqli_query($link,"SET NAMES 'utf8'"); //chuyen ma utf-8
$result = mysqli_query($link,$str_select);
echo "MÃ LOẠI SẢN PHẨM - TÊN LOẠI SẢN PHẨM - DIỄN GIẢI</BR>";
while($row2 = mysqli_fetch_array($result, MYSQLI_NUM)) 
{
echo $row2[0].$row2[1].$row2[2]."</BR>";
}
mysqli_free_result($result);
mysqli_close($link);
?>
