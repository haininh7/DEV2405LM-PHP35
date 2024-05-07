<?php
  // lấy dữ liệu trên form: $=POST
  $taikhoan = $_POST["txtTaikhoan"];
  $matkhau = $_POST["txtMatkhau"];

  echo "<h1> Welcome to, $taikhoan; mật khẩu của bạn: $matkhau";
  ?>