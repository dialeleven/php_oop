<?php
/*
https://www.w3schools.com/php/php_oop_classes_objects.asp
*/
class Fruit
{
   // properties
   public $name; // can be public, protected, or private
   public $color;

   function __construct($name) {
      $this->name = $name;
   }

   // methods
   // this is now redundant with 'setName' being part of the __construct()
   function setName($name) {
      $this->name = $name;
   }

   function getName() {
      return $this->name;
   }

   function setColor($color) {
      $this->color = $color;
   }

   function getColor() {
      return $this->color;
   }
}

$apple = new Fruit('Apple');
$banana = new Fruit('Banana');

$apple->setColor('Red');

echo 'Name: ' . $apple->getName() . "<br>\n";
echo 'Color: ' . $apple->getColor() . "<br>\n";
echo $banana->getName();
?>