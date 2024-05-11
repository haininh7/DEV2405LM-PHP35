<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo "<h2>Khai bái sử dụng biến trong PHP</h2>";
       echo "Khai báo biến a = 11.5";
       $a= 11.5;
       echo "giá trị của biến a $a <br />";
       echo "kiểu giá trị của biên a là ".gettype($a)."<br />";
       echo "chuyển đổi kiểu dữ liệu của biến a về kiểu số nguyên <br />";
       $a= (int)$a;
       echo "Biến a đã chuyển đổi từ kiểu Double về kiểu nguyên ".$a ." -- ";
       echo gettype($a);
       echo "<br />";
       echo "Chuyển đổi biến a từ double về int của biến a<br />";
       $a = (double)$a;
       echo "bien sau khi đã chuyển đổi có giá trị là $a.0 và kiểu ".gettype($a)."<br />";
       echo "CHuyển đổi biến a từ kiểu doubloe sang kiểu string<br />";
       $a = (string)$a;
       echo "Biến a sau khi đã chuyển đổi từ kiểu double sang string có giá trị '$a' và kiểu dữ liệu ".gettype($a);
    ?>    
</body>
</html>