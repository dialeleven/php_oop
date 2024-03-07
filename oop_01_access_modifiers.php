<?php
/*
https://www.w3schools.com/php/php_oop_classes_objects.asp
*/
class Fruit
{
   // properties
   public $name; // the property or method can be accessed from everywhere
   protected $color; // the property or method can be accessed within the class and by classes derived from that class
   private $weight; // the property or method can ONLY be accessed within the class

}

$mango = new Fruit();
echo $mango->name = 'Mango'; // OK
#echo $mango->color = 'Yellow'; // Error
echo $mango->weight = '300'; // Error
?>