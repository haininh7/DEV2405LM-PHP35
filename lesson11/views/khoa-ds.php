<?php
  // đã kết nối
  $sql ="select * from khoa where 1=1 ";
  $result = $conn->prepare($sql);
  $result->execute();
?>


<div class="row">


    <h2>quản lí thông tin khoa</h2>
   
<table class="table table-bodered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã khoa</th>
      <th scope="col">Tên khoa</th>
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
        <td><?php echo $row["MaKH"];  ?></td>
        <td><?php echo $row["TenKH"];  ?></td>
        <td>
            <a href="index.php?view=khoa-addedit&action=edit&makh=<?php echo $row["MaKH"]; ?>" 
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