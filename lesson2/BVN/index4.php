<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="./index4.css">
</head>
<body>
     <?php
         $arrMenu = array(
             "home"=>"Trang chủ",
             "about"=>"Giới thiệu",
             "product"=>"Sản phẩm",
             "service"=>"Dịch vụ",
             "contact"=>"Liên hệ"
         );
     ?>
     <div id="main">
          <nav>
              <ul>
                <?php
                   $i=0;
                   foreach ($arrMenu as $key => $value){
                      $i++;
                      $selected="";
                      if(!isset($_GET["view"]) && $i==1){
                         $selected = 'class ="selected"';
                      }
                      elseif(isset($_GET["view"]) && $_GET["view"]==$key){
                        $selected = 'class ="selected"';
                      }
                      ?>
                      <li>
                          <a <?php echo $selected; ?> href="index4.php?view=<?php echo $key; ?>">
                              <?php echo $value; ?>
                           
                          </a>
                      </li>
                      <?php
                   }
                   ?>
              </ul>
          </nav>
     </div>
</body>
</html>