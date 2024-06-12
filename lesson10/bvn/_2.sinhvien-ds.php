<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
         $conn = new mysqli("localhost","root","07012003","qlsinhvien");
         $sql = "select * from sinhvien where 1=1";
         $result = $conn->query($sql);




    ?>
     <header class="container">
         <h1 class="text-center my-3">Danh sách sinh viên</h1>
     </header>
     <section class="container">
        <a href="_3.sinhvien-add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table table-bordered mt-3">
            <thead>
                    <tr>
                    <th>#</th>
                        <th>Mã sinh viên</th>
                        <th>Họ sinh viên</th>
                        <th>Tên sinh viên</th>
                        <th>Phai</th>
                        <th>Ngày sinh</th>
                        <th>Nơi sinh</th>
                        <th>Mã khoa</th>
                        <th>Học bổng</th>
                        <th>Điểm trung bình</th>
                        <th>Chức năng</th>
                    </tr>
            </thead>
            <tbody>
                <?php
                    $num =0;
                    while($row =$result->fetch_array()):
                    $num++;
                ?>
                <tr>
                    <td><?php echo $num;  ?></td>
                    <td><?php echo $row["MaSV"]; ?>  </td>
                    <td><?php echo $row["HoSV"]; ?></td>
                    <td><?php echo $row["TenSV"]; ?></td>
                    <td><?php echo $row["Phai"]; ?>  </td>
                    <td><?php echo $row["NgaySinh"]; ?>  </td>
                    <td><?php echo $row["NoiSinh"]; ?>  </td>
                    <td><?php echo $row["MaKH"]; ?>  </td>
                    <td><?php echo $row["HocBong"]; ?>  </td>
                    <td><?php echo $row["DiemTrungBinh"]; ?>  </td>

                    <td class="text-center">
                          <a href="_3.sinhvien-edit.php?makh=<?php echo $row['MaSV'];?>" class="btn btn-success">Edit</a>
                          <a href="_3.sinhvien-ds.php?makh=<?php echo $row['MaSV'];?>" class="btn btn-danger"
                          onclick="return confirm('Bạn có muốn xóa sinh viên này không?')">Delete</a>
                    </td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
        <a href="_2.sinhvien-add.php" class="btn btn-primary">Thêm mới</a>
     </section>

    
     <?php
         if(isset($_get['masv'])){
            $makh = $_get['masv'];
            
            $sql ="delete from sinhvien where MaSV = '$masv'";
            try{
                    $conn->query($sql);
              
                    echo "<script> location.href='_2.sinhvien-ds.php'; </script>";
            }catch (Exception $ex){
                echo "<h3> Lỗi khi xóa " .$ex->getMesage();
                echo "<script> alert('Lỗi khi xóa dữ liệu sinh viên'); </script>";
            }
         }

     ?>
</body>
</html>