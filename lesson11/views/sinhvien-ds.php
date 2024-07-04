<?php
  // đã kết nối
  $sql ="select * from sinhvien where 1=1";
  if(isset($_GET["makh"])){// lọc theo mã khoa
    $makh=$_GET["makh"];
    $sql .=" and MaKH = '". $makh . "'";

    $arr[]=$makh;
  }
  $result = $conn->prepare($sql);
  $result->execute(arr);

  //dữ liệu cho combox khoa
  $qplkhoa = "select * from khoa";
  $resKhoa = $conn->prepare($sqlKhoa);
  $resKhoa->execute();
?>

<div class="row">
    <h2>quản lí thông tin sinh viên</h2>
   <form action="" method="get">
       <div>
           <label for="">Chọn khoa</label>
           <select name="makh" >
               <option value="">--- Chọn khoa ---</option>
               <?php
                   foreach ($resKhoa as $rowKhoa){
                    ?>
                    <option value="<?php echo $rowKhoa["MakH"];?>"
                    <?php  echo $rowKhoa["MakH"]==$makh? "selected":""; ?>
                    >
                     <?php echo  $rowKhoa["TenkH"];?>
                    </option>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã sinh viên</th>
      <th scope="col">Họ sinh viên</th>
      <th scope="col">Tên sinh viên</th>
      <th scope="col">Phai</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Nơi sinh</th>
      <th scope="col">Mã khoa</th>
      <th scope="col">Học bổng</th>
      <th scope="col">Điểm trung bình</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $stt=0;
       foreach($result as $row){
        $stt++;
       
    ?>
    <tr> 
        <td><?php echo $stt;  ?></td>
        <td><?php echo $row["MaSV"];  ?></td>
        <td><?php echo $row["HoSV"];  ?></td>
        <td><?php echo $row["TenSV"];  ?></td>
        <td><?php echo $row["Phai"];  ?></td>
        <td><?php echo $row["NgaySinh"];  ?></td>
        <td><?php echo $row["NoiSinh"];  ?></td>
        <td><?php echo $row["MaKH"];  ?></td>
        <td><?php echo $row["HocBong"];  ?></td>
        <td><?php echo $row["DiemTrungBinh"];  ?></td>
        <td>
            <a href="index.php?view=sinhvien-addedit&action=edit&makh=<?php echo $row["MaMH"]; ?>" 
            class="btn btn-success">
            Edit
            </a>

        </td>
        <?php
       }
       ?>
    </tr>
  </tbody>

</div>