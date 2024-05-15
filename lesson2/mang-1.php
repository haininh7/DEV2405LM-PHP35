<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng số</title>
</head>
<body>
     <h1>Mảng số</h1>
     <?php 
         $arr = array("xin","chào","bạn");
         echo "<p> $arr[0]";
         echo "<p> $arr[1]";
         echo "<p> $arr[2]";
         echo "<hr/>";
         $arr = array(5=>"xin","chào","bạn");
         echo "<p> $arr[5]";
         echo "<p> $arr[6]";
         echo "<p> $arr[7]";
         echo "<hr/>";
         $arr = array("xin","chào","bạn");
         echo "<p> $arr[0]";
         echo "<hr/>";
         $name[0]="Hải";
         $name[1]="Ninh";
         echo "<h3> xin chào: $name[0] $name[1] </h3>";

         echo"<hr/>";
         $countries = array("us"=>"united state",
         "us"=>"united kingdom", "vn"=>"viet nam","cn"=>"china");
         print_r($countries);
         echo"<hr>";
         echo "<h2> mảng nhiều chiều</h2>";
         
         $products = array(
                  array("100","iphone",1200),
                  array("101","samsung",1000),
                  array("102","LG",200),
                  array("102","ABC",1500),
                


         );
         echo "<p>". $products[0][0]; //100
         echo "<p> danh sách </p>";
         for($row =0; $row < 4; $row++){
            for($col =0; $col <3; $col++){
                echo $products[$row][$col] . " ";
            }
            echo "<p>";
         }

         echo"<hr>";
         echo"<p> số phần tử : ". count($products); // số phần tử trong mảng
         echo"<p> ", is_array($products); // kiểm tra xem có là mảng k

         $arr = array("a"=>"dog","b"=>"cat","c"=>"horse");
         echo"<p>" .$arr["d"]; //lỗi
         if(array_key_exists("d",$arr)){
            echo "<p>" .$arr["d"];
         }else{
            echo "<p> khong ton tai key la 'd'";
         }
      
         //hàm array_key
         $arr = array("a"=>"dog","b"=>"cat","c"=>"horse");
         foreach(array_keys($arr) as $key){
            echo"<p>". $key;
         }
         echo "<hr/";
         print_r(array_keys($arr));
     
     ?>
</body>
</html>