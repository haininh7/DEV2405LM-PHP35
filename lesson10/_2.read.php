<h1>đọc dữ liệu từ bảng</h1>
<?php
// 1.kết nối
$conn = new mysqli("localhost","root","07012003","day10Db");
// 2. tạo truy vấn từ bảng
$sql = "select * from tbl_user where 1=1";
// 3.
$result = $conn->query($sql);
print_r($result);

echo "<h2>thêm dữ liệu</h2>";
// $sql_insert = "insert into tbl_province value(N'Tp Hà Nội',1)";
// if($conn->query($sql_insert)){
//     echo "<p>thêm mới thành công";
// }else{
//     echo "<p>lỗi thêm mới:".$conn->connect_error;
// }

$sql = "select * from tbl_province where 1=1";
$result = $conn->query($sql);
print_r($result);

// đọc từng dòng trong tập kết quả
while ($row =$result->fetch_array()){
    echo "<p> " . $row['pro_name'];
}