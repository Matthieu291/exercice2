<?php
 interface Shape {
     public function getArea();
 }

 class Square implements Shape{
     private $height;
     private $width;
     public function __construct($w,$h){
         $this->width = $w;
         $this->height =$h;
     }

     public function getArea(){
         return $this->width *$this->height;
     }
 }

 class Circle implements Shape {
     private $radius;
     public function __construct($r){
         $this->radius = $r;
     }

     public function getArea(){
         return 3.14*$this->radius*$this->radius;
     }
 }

 $s =  new Square (2,2);
 $c = new Circle(5);
$tab = [$c,$s];
for ($i =0 ; $i<= sizeof($tab); $i++) {
    $str = get_class($tab[$i]);
    $val = $tab[$i]->getArea();
    echo ("$str Area : $val<br>");
}

?>
