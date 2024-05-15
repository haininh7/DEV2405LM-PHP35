<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $thang = '';
       if(isset($_POST["thang"])){
         $num = (int)$_POST["num"];
         switch ($num) {
            case 1:
                    $thang .= "Tháng một";
                    break;
            case 2:
                    $thang .= "Tháng hai";
                    break;
            case 3:
                    $thang .= "Tháng ba";
                    break;
            case 4:
                    $thang .= "Tháng bốn";
                    break;
            case 5:
                    $thang .= "Tháng năm";
                    break;
            case 6:
                    $thang .= "Tháng sáu";
                    break;
            case 7:
                    $thang .= "Tháng bảy";
                    break;
            case 8:
                    $thang .= "Tháng tám";
                    break;
            case 9:
                    $thang .= "Tháng chín";
                    break;
             case 10:
                    $thang .= "Tháng mười";
                    break;
            case 11:
                    $thang .= "Tháng mười một";
                    break;
            case 12:
            $thang .= "Tháng mười hai";
            break;
         }
       }
    ?>
    <form action="" method="post">
           <table width="270" align="center">
              <caption>
                <p>Nhập vào số tháng chuyển thành chữ</p>
                <?php
                if($thang){
                ?>
                Bạn nhập vào tháng :<?php echo $thang; }?>
              </caption>

        <tr>
            <td>Nhập số tháng:</td>
            <td><input type="text" name="num" id="num" /></td>
        </tr>
        <tr> 
            <td></td>
            <td>
                <input type="submit" value="Tìm tháng" name="thang" />
            </td>
        </tr>
           </table>
    
</form>
</body>
</html>