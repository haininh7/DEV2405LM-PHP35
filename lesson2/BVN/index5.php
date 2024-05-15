<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index5.css">
</head>
<body>
    <?php
         if(!isset($_GET["lang"])|| $_GET["lang"]=="vi"){
             $arrMenu = array(
                "home"=>"Trang chủ",
                "about"=>"Giới thiệu",
                "product"=>"Sản phẩm",
                "service"=>"Dịch vụ",
                "contact"=>"Liên hệ"
             );
         }else{
            $arrMenu = array(
                "home"=>"Home",
                "about"=>"About",
                "product"=>"Product",
                "service"=>"Services",
                "contact"=>"Contact"
            );
         }
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
                            $selected='class ="selected"';
                          }
                          elseif(isset($_GET["view"]) && $_GET["view"]==$key){
                            $selected= 'class ="selected"';
                          }
                      
                  ?>
                  <li>
                       <a <?php echo $selected; ?> href="index4.php?view=<?php echo $key; ?>
                            &lang=<?php echo isset ($_GET['lang'])?$_GET['lang']:"" ?>">
                            <?php echo $value; ?>                    
                    </a>
                  </li>
                  <?php
                      }
                  ?>
               </ul>
            <ul id="language">
                <li><a href="index4.php?view=<?php
                   echo isset($_GET["view"])?$_GET["view"]:"home"
                   ?>&lang=vi">VI</a></li>
                <li>
                <a href="index4.php?view=<?php
                   echo isset($_GET["view"])?$_GET["view"]:"home"
                   ?>&lang=en">EN</a>
                </li>
            </ul>
           </nav>
    </div>
</body>
</html>