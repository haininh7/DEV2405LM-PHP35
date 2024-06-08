<?php
   class Point{

    // thuộc tính
    private $x;
    private $y;
    //hàm khởi tạo - constructor
    // function __construct()
    // {
    //     $this->x=100;
    //     $this->y=100;
    // }
    // function __construct($x,$y)
    // {
    //     $this->x=$x;
    //     $this->y=$y;
    // }
    function __construct($x=100,$y=200)
     {
         $this->x=$x;
         $this->y=$y;
     }
   // phương thức
   function display(){
    echo "<h2> ($this->x , $this->y) ";
   }
     // hàm hủy
     function __destruct(){
        $this->x=NULL;
        $this->y=NULL;
     }
   }
   // tạo đối tượng
   $p =new Point(100,300);
   $p->display();

   $p =new Point();
   $p->display();
?>