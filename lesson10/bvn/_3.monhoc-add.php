<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới môn học</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    if(isset($_POST["btnSave"])){
        $conn = new mysqli("localhost","root","07012003","qlsinhvien");
        $MaKH = $_POST["MaMH"];
        $TenKH =$_POST["TenMH"];
        $Sotiet =$_POST["Sotiet"];
        $sql = "insert into monhoc(MaMH,TenMH,Sotiet) values('$MaMH','$TenMH','$Sotiet')";
        try {
            $conn->query($sql);
            header("Location:_3.monhoc-ds.php");
        } catch (Exception $ex) {
            $error="lỗi thêm mới; ".$ex->getMessage();
        }
    }


?>



     <header class="container">
         <h1 class="text-center my-3">Thêm mới môn học</h1>
     </header>
     <section class="container bg-white">
       <form action="" method="post" class="p-5">
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaKh">Mã môn học</span>
                  <input type="text" class="form-control" placeholder="MaMH" 
                  name="MaMH" value="<?php echo isset($MaMH)?$MaMH:""; ?>"
                  aria-label="MaMH" aria-describedby="MaMH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="TenMH">Tên môn học</span>
                  <input type="text" class="form-control" placeholder="TenKH" 
                  name="TenMH" value="<?php echo isset($TenMH)?$TenMH:""; ?>"
                  aria-label="TenMH" aria-describedby="TenMH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="Sotiet">Số tiết</span>
                  <input type="text" class="form-control" placeholder="Sotiet" 
                  name="Sotiet" value="<?php echo isset($Sotiet)?$Sotiet:""; ?>"
                  aria-label="Sotiet" aria-describedby="Sotiet">
          </div>
          <div class="input-group mb-3">
                  <button class="btn btn-primary px-2 m-2" name="btnSave">Ghi lại</button>
                  <a href="_3.monhoc-ds.php" class="btn btn-secondary px-2 m-2">Quay lại</a>
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