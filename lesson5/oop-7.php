<?php
  // interface:chỉ chứa các phương thức không có nội dung
  interface Animal{
    function eat();
    function treval();
  }
  // lớp triển khai
  class Dog implements Animal{
    function eat(){
          echo "<h2> DOg eating...";
    }
    function treval(){
        echo "<h2> Dog treval...";
    }
  }
  class Cat implements Animal{
    function eat(){
          echo "<h2> Cat eating...";
    }
    function treval(){
        echo "<h2> Cat treval...";
    }
  }
  $d = new DOg();
  $d->eat();
  $d->treval();  
  $c = new Cat();
  $c->eat();
  $c->treval();  
  ?>
