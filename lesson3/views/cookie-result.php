<h1>Giá trị từ cookie</h1>
<?php
   if(isset($_COOKIE["email"])){
       echo $_COOKIE["email"];
   }
   if(isset($_COOKIE["pass"])){
    echo $_COOKIE["pass"];
}

echo "<hr>";
print_r($_COOKIE); //in dùng định dạng
?>