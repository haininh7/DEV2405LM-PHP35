<?php
   // kế thừa
   // lớp cơ sở(lớp cha- base class)

   class Car{
    // thuộc tính
    public $mileage;
    public $color;
    public $make;
    // phương thức
    function acccelerate(){
        echo "<h3> Car is accelerating...";
    }
    public function display(){
        echo "<h3> display lớp Car.";
    }
   }

   //lớp con- lớp kế thừa- Deriver class
   class LuxuryCar extends Car{
    // thuộc tính
    public $perks;
   }
   // sử dụng
   $lxy = new LuxuryCar();
   $lxy->acccelerate(); // sử dụng phương thức của lớp cha
   $lxy->display();
   $c = new Car();
   $c->display();

?>
