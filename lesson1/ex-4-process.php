<?php
  // lấy dữ liệu trên form: $=POST
  $taikhoan = $_POST["txtTaikhoan"];
  $matkhau = $_POST["txtMatkhau"];

  echo "<h1> Welcome to, $taikhoan; mật khẩu của bạn: $matkhau";
  ?>
  

  <?php
  // lấy dữ liệu trên form: $=POST
  $taikhoan = $_REQUEST["txtTaikhoan"];
  $matkhau = $_REQUEST["txtMatkhau"];

  echo "<hr/> Request: Welcome to, $taikhoan; mật khẩu của bạn: $matkhau";
  ?>