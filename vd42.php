<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
    die('Không thể kết nối: ' . mysqli_error());
$dbname = "icdasdt";
$s=mysqli_select_db($conn,$dbname);
if($s)
    echo "chon DB thanh cong";
else 
    echo "faill!!!!!!!";
mysqli_close($conn);
?>
