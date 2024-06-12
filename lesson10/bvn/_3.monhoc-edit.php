<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới khoa</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    include_once("_1.ketnoi.php");
    if(isset($_POST["btnSave"])){
    $MaMH =$_POST["MaMH"];
    $TenMH =$_POST["TenMH"];
    $Sotiet =$_POST["Sotiet"];
    $sql ="update monhoc set TenMH='$TenMH' and Sotiet='$Sotiet' where MaMH='$MaMH'";
    try{
        $conn->query($sql);
        $error="Đã sửa thành công!";
    }catch (Exception $ex){
            $error = "Lỗi sửa dữ liệu; ". $ex->getMessage();
    }
   }else if(isset($_REQUEST['mamh'])){
             $makh =$_REQUEST['mamh'];
             $sql ="select * from monhoc where MaMH= $mamh";
             $result = $conn->query($sql);
             if($result->num_rows>0){
                $row = $result->fetch_array();
                $MaMH =$row["MaMH"];
                $TenMH =$row["TenMH"];
                $Sotiet =$row["Sotiet"];
             }else{
                $error = "không tìm thấy thông tin môn học cần sửa";
             }
    }


?>



     <header class="container">
         <h1 class="text-center my-3">Sửa thông tin môn học</h1>
     </header>
     <section class="container bg-white">
       <form action="" method="post" class="p-5">
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaMH">Mã môn học</span>
                  <input type="text" class="form-control" placeholder="MaMH" readonly
                  name="MaMH" value="<?php echo isset($MaMH)?$MaMH:""; ?>"
                  aria-label="MaMH" aria-describedby="MaMH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="TenMH">Tên môn học</span>
                  <input type="text" class="form-control" placeholder="TenMH" 
                  name="TenMH" ue="<?php echo isset($TenMH)?$TenMH:""; ?>"
                  aria-label="TenMH" aria-describedby="TenMH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="Sotiet">Số tiết</span>
                  <input type="text" class="form-control" placeholder="Sotiet" 
                  name="Sotiet" ue="<?php echo isset($Sotiet)?$Sotiet:""; ?>"
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