<?php
  // lớp trừu tượng, phương thức trừu tượng
  abstract class Shape{
public $color;

function setColor($color){
    $this->color = $color;
}
function getColor(){
    return $this->color;
}
//phương thức trừu tượng
public abstract function chuVi();
public abstract function dienTich();
  }

  class HinhChuNhat extends Shape{
    public $chieuDai;
    public $chieuRong;
    function __construct($x=1,$y=2){
        $this->chieuDai=$x;
        $this->chieuRong=$y;
    }

    public function chuVi()
    {
         return ($this->chieuDai + $this->chieuRong)*2;
    }
    public function dienTich()
    {
         return $this->chieuDai*$this->chieuRong;
    }
  }

  $cn = new HinhChuNhat(100,200);
  echo "<h2> Chu vi:".$cn->chuVi();
  echo "<h2> Dien tich:".$cn->dienTich();
?>