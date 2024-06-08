<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
       <header>


       </header>

       <nav>
           <?php
              include("views/navBar.php")
           ?>
       </nav>
       <section id="sideBar">

       </section>
       <section id="main">
           <div class="container">
               <div class="col-md-2">
                      <!-- navLeft -->
                      <?php
                         include("views/navLeft.php");
                      ?>
               </div>
               <div class="col-md-10">
                      <!-- content -->
                      <?php
                         
                      ?>
               </div>
           </div>
       </section>
</body>
</html>