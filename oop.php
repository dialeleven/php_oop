<?php
/*
https://www.w3schools.com/php/php_oop_classes_objects.asp
*/
class Fruit
{
   // properties
   public $name; // can be public, protected, or private
   public $color;

   function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
   }

   function __destruct() {
      echo "The fruit is {$this->name} and the color is {$this->color}<br>\n";
   }

   // methods
   // this is now redundant with 'setName' being part of the __construct()
   /*
   function setName($name, $color) {
      $this->name = $name;
   }

   function setColor() {
      $this->color = $color;
   }
   */

   function getName() {
      return $this->name;
   }


   function getColor() {
      return $this->color;
   }
}

$apple = new Fruit('Apple', 'Red');
$banana = new Fruit('Banana', 'Yellow');


echo 'Name: ' . $apple->getName() . "<br>\n";
echo 'Color: ' . $apple->getColor() . "<br>\n";
echo $banana->getName();
?>