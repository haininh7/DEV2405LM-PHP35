<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu về php</title>
</head>
<body>
     <?php
          // mã nguồn php
          echo "<h1>Giới thiệu về PHP </h1>";
          echo "<h2> biến, hằng, kiểu dữ liệu.. </h2>";
          $name = "Ninh";
          $age = 21;

          print_r($name);
          print_r("<br/>");
          print_r($age);

          // hằng
          define("PI",3.1215132);
          echo "<p> Hằng PI:". PI;

          $a = "hello";
          $b = "$a world";
          $c = '$a world';

          echo "<p>  $a";
          echo "<p>  $b";
          echo "<p>  $c";
        
     ?>
</body>
</html>