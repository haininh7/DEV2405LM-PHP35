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
    //1.kết nối
    include_once("_0.ketnoi.php");
    // khi người dùng nhấn vào nút ghi lại
   if(isset($_POST["btnSave"])){
    // lấy dữ liệu trên form
    $MaKH =$_POST["MaKH"];
    $TenKH =$_POST["TenKH"];
    //2. tạo truy vấn sửa
    $sql ="update khoa set TenKH='$TenKH' where MaKH='$MaKH'";
    try{
        $conn->query($sql);
        $error="Đã sửa thành công!";
    }catch (Exception $ex){
            $error = "Lỗi sửa dữ liệu; ". $ex->getMessage();
    }
   }else if(isset($_REQUEST['makh'])){//có tồn tại makh trên url 
             // đọc dữ liệu cần sửa từ bảng khoa theo makh
             $makh =$_REQUEST['makh'];
             
           
             //2.tạo truy vấn đọc dữ liệu từ bảng khoa theo mã khoa
             $sql ="select * from khoa where MaKH= $makh";
             //3.thực thi câu lệnh truy vấn
             $result = $conn->query($sql);
             if($result->num_rows>0){
                $row = $result->fetch_array();
                $MaKH =$row["MaKH"];
                $TenKH =$row["TenKH"];
             }else{
                $error = "không tìm thấy thông tin khoa cần sửa";
             }
    }


?>



     <header class="container">
         <h1 class="text-center my-3">Sửa thông tin khoa</h1>
     </header>
     <section class="container bg-white">
       <form action="" method="post" class="p-5">
          <div class="input-group mb-3">
                  <span class="input-group-text" id="MaKH">Mã khoa</span>
                  <input type="text" class="form-control" placeholder="MaKH" readonly
                  name="MaKH" value="<?php echo isset($MaKH)?$MaKH:""; ?>"
                  aria-label="MaKH" aria-describedby="MaKH">
          </div>
          <div class="input-group mb-3">
                  <span class="input-group-text" id="TenKH">Tên khoa</span>
                  <input type="text" class="form-control" placeholder="TenKH" 
                  name="TenKH" ue="<?php echo isset($TenKH)?$TenKH:""; ?>"
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