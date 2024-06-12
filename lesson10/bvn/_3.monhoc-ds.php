<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách môn học</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
         $conn = new mysqli("localhost","root","07012003","qlsinhvien"); 
         $sql = "select * from monhoc where 1=1";
         $result = $conn->query($sql);
    ?>
     <header class="container">
         <h1 class="text-center my-3">Danh sách môn học</h1>
     </header>
     <section class="container">
        <a href="_3.monhoc-add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table table-bordered mt-3">
            <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tiết</th>
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
                    <td><?php echo $row["MaMH"]; ?>  </td>
                    <td><?php echo $row["TenMH"]; ?></td>
                    <td><?php echo $row["Sotiet"]; ?></td>
                    <td class="text-center">
                          <a href="_3.monhoc-edit.php?makh=<?php echo $row['MaMH'];?>" class="btn btn-success">Edit</a>
                          <a href="_3.monhoc-ds.php?makh=<?php echo $row['MaMH'];?>" class="btn btn-danger"
                          onclick="return confirm('Bạn có muốn xóa môn học này không?')">Delete</a>
                    </td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
        <a href="_3.monhoc-add.php" class="btn btn-primary">Thêm mới</a>
     </section>
     <?php
         if(isset($_get['mamh'])){
            $makh = $_get['mamh'];
            $sql ="delete from monhoc where MaMH = '$mamh'";
            try{
                    $conn->query($sql);
                    echo "<script> location.href='_3.monhoc-ds.php'; </script>";
            }catch (Exception $ex){
                echo "<h3> Lỗi khi xóa " .$ex->getMesage();
                echo "<script> alert('Lỗi khi xóa dữ liệu môn học'); </script>";
            }
         }

     ?>
</body>
</html>