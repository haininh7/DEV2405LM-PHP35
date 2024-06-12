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
    //xác định khi nào người dùng nhấn submit (ghi lại - btnSave)
    //$error = ""; // biến quản lí lỗi nếu có
    if(isset($_POST["btnSave"])){
        //1. kết nối
        $conn = new mysqli("localhost","root","07012003","qlsinhvien");
        //2. lấy dữ liệu trên form
        $MaKH = $_POST["MaKH"];
        $TenKH =$_POST["TenKH"];
        //3. tạo truy vấn thêm
        $sql = "insert into KHOA(MaKH,TenKH) values('$MaKH','$TenKH')";
        // die($sql);
        //4. thực thi truy vấn thêm
        // if($conn->query($sql)){
        //     header("Location:_3.khoa-ds.php");
        // }else{
        //     $error="Lỗi thêm mới; ".$conn->connect_error;
        // }
        try {
            $conn->query($sql);
            header("Location:_3.khoa-ds.php");
        } catch (Exception $ex) {
            $error="lỗi thêm mới; ".$ex->getMessage();
        }
    }


?>



     <header class="container">
         <h1 class="text-center my-3">Thêm mới khoa</h1>
     </header>
     <section class="container bg-white">
       <form action="" method="post" class="p-5">
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaKh">Mã khoa</span>
                  <input type="text" class="form-control" placeholder="MaKH" 
                  name="MaKH" value="<?php echo isset($MaKH)?$MaKH:""; ?>"
                  aria-label="MaKH" aria-describedby="MaKH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="TenKH">Tên khoa</span>
                  <input type="text" class="form-control" placeholder="TenKH" 
                  name="TenKH" value="<?php echo isset($TenKH)?$TenKH:""; ?>"
                  aria-label="TenKH" aria-describedby="TenKH">
          </div>
          <div class="input-group mb-3">
                  <button class="btn btn-primary px-2 m-2" name="btnSave">Ghi lại</button>
                  <a href="_3.khoa-ds.php" class="btn btn-secondary px-2 m-2">Quay lại</a>
          </div>
          <!-- xử lí thông báo lỗi nếu có -->
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