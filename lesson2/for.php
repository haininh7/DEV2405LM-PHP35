<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for demo</title>
</head>
<body>
<h1>for demo</h1>
     <?php 
     // in ra các số nguyên tiwf 1-10     
     for($i=1;$i<=10;$i++){
        echo $i .",";
     }
     echo '<hr/>';
     for ($i =1;  ;$i++){
        echo $i .",";
        if($i==10) break;
     }
     ?>
     <h2>while</h2>
     <?php
        // cấu trúc lặp while
        $i=1; $tong=0;
        while($i<=10){
            echo $i .",";
            $tong += $i;
            $i++;
        } 
        echo "<p>tổng:".$tong;
     ?>
     <h2>do..while</h2>
     <?php
        // cấu trúc lặp do.. while
        $i=1; $tong=0;
        do{
            echo $i .",";
            $tong += $i;
            $i++;
        }while($i<=10);
        echo "<p>tổng:".$tong;
     ?>
     <h2> foreach - lặp trong tập hợp</h2>
     <?php
       $arr = [1,4,2,6,3,8];
       foreach ($arr as $key => $value){
        echo "<p> $key - $value";
       }
       echo "<hr/>";
       for ($i=0; $i< count($arr);$i++){
        echo $arr[$i] . ",";
       }
       ?>

    
</body>
</html>