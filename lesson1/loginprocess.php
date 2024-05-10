<?php
  // lấy dữ liệu trên form: $=POST
  $taikhoan = $_POST["txtTaiKhoan"];
  $matkhau = $_POST["txtMatKhau"];

  echo "<h1> Welcome to, $taikhoan; mật khẩu của bạn: $matkhau";
  ?>