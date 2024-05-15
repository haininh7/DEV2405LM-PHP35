<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
          if(isset($_POST["xuly"])){
              $sochan = $sole="";
              $tongchan = $tongle =0;
              $number =$_POST["number"];
              $i=1;
              while ($i <= $number) {
                  if($i%2==0){
                      $sochan .=$i.",";
                      $tongchan +=$i;
                  }else{
                    $sole .= $i.",";
                    $tongle +=$i;
                  }
                  $i++;
              }
              echo "Danh sách số chẵn :".$sochan."<br />";
              echo "Tổng các số chẵn :" .$tongchan."<br />";
              echo "Danh sách số lẻ :".$sole."<br />";
              echo "Tổng các số lẻ :" .$tongle;
          }
      ?>
      <form action="" method="post">
           <table>
              <caption>Hiển thị danh sách số lẻ <br />số chẵn và tổng tương ứng</caption>
               <tr>
                  <td>Nhập số bất kì</td>
                  <td>
                     <input type="text" name="number" id="number" />
                  </td>
                  <td>
                    <input type="submit" value="xử lý" name="xuly">
                  </td>
               </tr>
           </table>
      </form>
</body>
</html>