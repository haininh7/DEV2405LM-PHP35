<?php
  // đã kết nối
  $sql ="select * from monhoc where 1=1";
  $result = $conn->prepare($sql);
  $result->execute();
?>

<div class="row">
    <h2>quản lí thông tin môn học</h2>
   
<table class="table table-bodered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã môn học</th>
      <th scope="col">Tên môn học</th>
      <th scope="col">Số tiết</th>
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
        <td><?php echo $row["MaMH"];  ?></td>
        <td><?php echo $row["TenMH"];  ?></td>
        <td><?php echo $row["Sotiet"];  ?></td>
        <td>
            <a href="index.php?view=monhoc-addedit&action=edit&makh=<?php echo $row["MaMH"]; ?>" 
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