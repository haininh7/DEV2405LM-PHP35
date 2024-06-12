<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sinh viên</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    include_once("_1.ketnoi.php");
    if(isset($_POST["btnSave"])){
    $MaMH =$_POST["MaSV"];
    $TenMH =$_POST["TenSV"];
    $sql ="update sinhvien set TenSV='$TenSV' where MaSV='$MaSV'";
    try{
        $conn->query($sql);
        $error="Đã sửa thành công!";
    }catch (Exception $ex){
            $error = "Lỗi sửa dữ liệu; ". $ex->getMessage();
    }
   }else if(isset($_REQUEST['masv'])){
             $makh =$_REQUEST['masv'];
             $sql ="select * from sinhvien where MaSV= $masv";
             $result = $conn->query($sql);
             if($result->num_rows>0){
                $row = $result->fetch_array();
                $MaMH =$row["MaSV"];
                $TenMH =$row["TenSV"];
             }else{
                $error = "không tìm thấy thông tin sinh viên cần sửa";
             }
    }


?>



     <header class="container">
         <h1 class="text-center my-3">Sửa thông tin sinh viên</h1>
     </header>
     <section class="container bg-white">
       <form action="" method="post" class="p-5">
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaSV">Mã sinh viên</span>
                  <input type="text" class="form-control" placeholder="MaSV" readonly
                  name="MaSV" value="<?php echo isset($MaSV)?$MaSV:""; ?>"
                  aria-label="MaSV" aria-describedby="MaSV">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="HoSV">Họ sinh viên</span>
                  <input type="text" class="form-control" placeholder="HoSV" readonly
                  name="HoSV" value="<?php echo isset($HoSV)?$HoSV:""; ?>"
                  aria-label="HoSV" aria-describedby="HoSV">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="TenSV">Tên sinh viên</span>
                  <input type="text" class="form-control" placeholder="TenSV" 
                  name="TenSV" ue="<?php echo isset($TenSV)?$TenSV:""; ?>"
                  aria-label="TenSV" aria-describedby="TenSV">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="Phai">Phai</span>
                  <input type="number" class="form-control" placeholder="Phai" readonly
                  name="Phai" value="<?php echo isset($Phai)?$Phai:""; ?>"
                  aria-label="Phai" aria-describedby="Phai">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="NgaySinh">Ngày sinh</span>
                  <input type="date" class="form-control" placeholder="NgaySinh" readonly
                  name="NgaySinh" value="<?php echo isset($NgaySinh)?$NgaySinh:""; ?>"
                  aria-label="NgaySinh" aria-describedby="NgaySinh">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="NoiSinh">Nơi sinh</span>
                  <input type="text" class="form-control" placeholder="NoiSinh" readonly
                  name="NoiSinh" value="<?php echo isset($NoiSinh)?$NoiSinh:""; ?>"
                  aria-label="NoiSinh" aria-describedby="NoiSinh">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaKH">Mã khoa</span>
                  <input type="text" class="form-control" placeholder="MaKH" readonly
                  name="MaKH" value="<?php echo isset($MaKH)?$MaKH:""; ?>"
                  aria-label="MaKH" aria-describedby="MaKH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="HocBong">Học bổng</span>
                  <input type="number" class="form-control" placeholder="HocBong" readonly
                  name="HocBong" value="<?php echo isset($HocBong)?$HocBong:""; ?>"
                  aria-label="HocBong" aria-describedby="HocBong">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="DiemTrungBinh">Điểm trung bình</span>
                  <input type="text" class="form-control" placeholder="DiemTrungBinh" readonly
                  name="DiemTrungBinh" value="<?php echo isset($DiemTrungBinh)?$DiemTrungBinh:""; ?>"
                  aria-label="DiemTrungBinh" aria-describedby="DiemTrungBinh">
          </div>
          <div class="input-group mb-3">
                  <button class="btn btn-primary px-2 m-2" name="btnSave">Ghi lại</button>
                  <a href="_2.sinhvien-ds.php" class="btn btn-secondary px-2 m-2">Quay lại</a>
          </div>
           <?php
                if(isset(($error))):
           ?>
             <span class="alert alert-danger">
                <?php echo $error;?>
                </span>

             <?php
                  endif;
             ?>
       </form>


     </section>
</body>
</html>