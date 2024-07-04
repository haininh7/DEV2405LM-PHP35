<?php
error_reporting(0); // ẩn các warning
$conn=null;
try{
//     $conn = new mysqli("localhost","root","07012003","qlsinhvien");
//    echo "<p> Connecting....";
  $db_host="localhost";
  $db_port="3306";
  $db_dbname="qlsinhvien";
  $db_user="root";
  $db_pass="07012003";
$conn = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_dbname",$db_user,$db_pass);
}catch (Exception $ex){
    
    die($ex->getMessage()); // 
}
 
?>