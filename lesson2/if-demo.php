<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giải phương trình bậc 1</title>
</head>
<body>
    <?php
    //giải phương trình bậc 1
    if(isset($_POST["btnThucHien"])){    // khi người dùng nhấn nút thực hiện
        // lấy giá trị từ các điều khiển trên form
       $a = $_POST["heSoA"];
       $b = $_POST["heSoB"];

       echo"<h2> $a .X + $b=0 </h2>";
       //giải phương trình
      if($a==0){
        if($b==0){
            $kq="Phương trình vô số nghiệm";
        }else{
            $kq="Phương trình vô nghiệm";
        }
      }
      else {
        $x = -$b/$a;
        $kq="nghiệm của phương trình x= $x";
      }
    }
?>

     <h1>giải phương trình bậc 1: a.X+b=0</h1>
     <form action="" method="post">
          <div>
              <label for="heSoA">Hệ số a</label>
              <input type="number" id="heSoA" name="heSoA" value="<?php echo isset($a)?$a: ''; ?>"/>
          </div>
          <div>
              <label for="heSoB">Hệ số b</label>
              <input type="number" id="heSoB" name="heSoB" value="<?php echo isset($b)?$b: ''; ?>"/>
          </div>
          <Button name="btnThucHien">Thực hiện</Button>
          <div><?php echo $kq; ?></div>
     </form>
</body>
</html>