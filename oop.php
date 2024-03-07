<?php
/*
https://www.w3schools.com/php/php_oop_classes_objects.asp
*/
class Fruit
{
   // properties
   public $name; // can be public, protected, or private
   public $color;

   // methods
   function setName($name) {
      $this->name = $name;
   }

   function getName() {
      return $this->name;
   }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->setName('Apple');
$banana->setName('Banana');

echo $apple->getName();
echo '<br>';
echo $banana->name;
?>