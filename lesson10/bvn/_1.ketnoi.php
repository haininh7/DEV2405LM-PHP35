<h2>kết nối máy chủ và lựa chọn cơ sở dữ liệu</h2>
<?php
 // kết nối tới csdl
 // sử dụng hàm mysqli kết nối server và lựa chọn csdl
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $conn = new mysqli("localhost","root","07012003","day10Db");
 if($conn->connect_errno){
    die("kết nối không thành công". $conn->connect_error);
 }

 $conn->query("set names 'utf8' ");

 echo "<h3>kết nối thành công </h3>";
?>