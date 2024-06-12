<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sinh viên</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    if(isset($_POST["btnSave"])){
        $conn = new mysqli("localhost","root","07012003","qlsinhvien");
        $MaSV = $_POST["MaSV"];
        $HoSV =$_POST["HoSV"];
        $TenSV =$_POST["TenSV"];
        $Phai =$_POST["Phai"];
        $NgaySinh =$_POST["NgaySinh"];
        $NoiSinh =$_POST["NoiSinh"];
        $MaKhoa =$_POST["MaKH"];
        $HocBong =$_POST["HocBong"];
        $DiemTrungBinh =$_POST["DiemTrungBinh"];
        $sql = "insert into sinhvien(MaSV,HoSV,TenSV,Phai,NgaySinh,NoiSinh,MaKH,HocBong,DiemTrungBinh) values('$MaMH','$TenMH','$Sotiet')";
        try {
            $conn->query($sql);
            header("Location:_2.sinhvien-ds.php");
        } catch (Exception $ex) {
            $error="lỗi thêm mới; ".$ex->getMessage();
        }
    }


?>



     <header class="container">
         <h1 class="text-center my-3">Thêm mới sinh viên</h1>
     </header>
     <section class="container bg-white">
       <form action="" method="post" class="p-5">
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaSV">Mã sinh viên</span>
                  <input type="text" class="form-control" placeholder="MaSV" 
                  name="MaSV" value="<?php echo isset($MaSV)?$MaSV:""; ?>"
                  aria-label="MaSV" aria-describedby="MaSV">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="HoSV">Họ sinh viên</span>
                  <input type="text" class="form-control" placeholder="HoSV" 
                  name="HoSV" value="<?php echo isset($HoSV)?$HoSV:""; ?>"
                  aria-label="HoSV" aria-describedby="HoSV">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="TenSV">Tên sinh viên</span>
                  <input type="text" class="form-control" placeholder="TenSV" 
                  name="TenSV" value="<?php echo isset($TenSV)?$TenSV:""; ?>"
                  aria-label="TenSV" aria-describedby="TenSV">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="Phai">Phai</span>
                  <input type="number" class="form-control" placeholder="Phai" 
                  name="Phai" value="<?php echo isset($Phai)?$Phai:""; ?>"
                  aria-label="Phai" aria-describedby="Phai">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="NgaySinh">Ngày sinh</span>
                  <input type="date" class="form-control" placeholder="NgaySinh" 
                  name="NgaySinh" value="<?php echo isset($NgaySinh)?$NgaySinh:""; ?>"
                  aria-label="NgaySinh" aria-describedby="NgaySinh">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="NoiSinh">Nơi sinh</span>
                  <input type="text" class="form-control" placeholder="NoiSinh" 
                  name="NoiSinh" value="<?php echo isset($NoiSinh)?$NoiSinh:""; ?>"
                  aria-label="NoiSinh" aria-describedby="NoiSinh">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaKh">Mã khoa</span>
                  <input type="text" class="form-control" placeholder="MaMH" 
                  name="MaMH" value="<?php echo isset($MaMH)?$MaMH:""; ?>"
                  aria-label="MaMH" aria-describedby="MaMH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="HocBong">Học bổng</span>
                  <input type="number" class="form-control" placeholder="HocBong" 
                  name="HocBong" value="<?php echo isset($HocBong)?$HocBong:""; ?>"
                  aria-label="HocBong" aria-describedby="HocBong">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="DiemTrungBinh">Điểm trung bình</span>
                  <input type="text" class="form-control" placeholder="DiemTrungBinh" 
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