<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hàm trong php-hàm người dùng định nghĩa</title>
</head>
<body>
      <h1>hàm trong php-hàm người dùng định nghĩa</h1>
      <?php
           //định nghĩa hàm
           function fnHi($param){
              echo" <h2> welcome to, ".$param;
           }
           //gọi thực hiện hàm
           fnHi("Ninh");
           //hàm trả về giá trị
           function fnCalc($a, $b){
            $c=$a+$b;
            return $c;
           }
           // gọi thực hiện
           echo "<p> ".fnCalc(10,12);
           echo "<p> ".fnCalc(10,14);
           echo "<p> ".fnCalc(10,15);
           echo "<p> ".fnCalc(10,16);
           echo "<p> ".fnCalc(10,33);
           function fnCaculator($a, $b=100){
                $c=$a+$b;
                return $c;
           }
           echo "<p>".fnCaculator(10,33);
           echo "<p>".fnCaculator(33);
           echo "<hr/>";
           $age =33;
           function fnBirthday1(){
             global $age; // sử dụng biến toàn cục
             echo "<p> chúc mừng $age";
           }
           fnBirthday1();
      ?>
</body>
</html>