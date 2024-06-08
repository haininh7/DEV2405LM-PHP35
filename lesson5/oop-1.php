<?php
// định nghĩa lớp,
class Point{
    // các thuộc tính
    public $x;
    private $y;

    // behavior - method
    function getX(){
        return $this->x;
    }
    function getY(){
        return $this->y;
    }


    function setX($px){
        $this->x=$px;
    }
    function setY($py){
        $this->y=$py;
    }
    // method
    function display(){
        echo "<h2> [ $this->x , $this->y ]";
    }
}
// tạo đối tượng từ lớp và sử dụng
$p = new Point();
// gán giá trị
$p->setX(100);
$p->setY(200);

//lấy giá trị
echo "<p> x=" . $p->getX();
echo "<p> y=" . $p->getY();

//gọi thực hiện phương thức của đối tượng
$p->display();

// truy cập đến thuộc tính
$p->x = 1000;
echo "<p>". $p->x;
$p->x = 2000; // lỗi: không thể truy cập vào biến ptivate trong lớp từ lớp ngoài
echo "<p>". $p->y; // lỗi 

?>