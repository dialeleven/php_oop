<?php
/*
https://www.w3schools.com/php/php_oop_inheritance.asp

Example Explained
The Strawberry class is inherited from the Fruit class.

This means that the Strawberry class can use the public $name and $color properties 
as well as the public __construct() and intro() methods from the Fruit class 
because of inheritance.

The Strawberry class also has its own method: message().

PHP Inheritance - Covering:
   - Inheritance
   - Inheritance and the Protected Access Modifier
   - Overriding Inherited Methods
*/
class Fruit
{
   // properties
   public $name; // the property or method can be accessed from everywhere
   protected $color; // the property or method can be accessed within the class and by classes derived from that class
   private $weight; // the property or method can ONLY be accessed within the class

   public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
   }

   public function intro() {
      echo 'Inside ' . __FUNCTION__ . "(): The fruit is {$this->name} and the color is {$this->color}\n";
   }

   // protected methods are only accessible within the class and derived classes
   protected function introProtected() {
      echo 'Inside ' . __FUNCTION__ . "(): The fruit is {$this->name} and the color is {$this->color}\n";
   }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
   public function message() {
      echo "Am I a fruit or a berry?\n";

      // call a protected method from within a drived class - OK
      $this->introProtected();
   }
}

$strawberry = new Strawberry($name = 'Strawberry', $color = 'Red');
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class


$strawberry->intro(); // call regular public intro() method from base class

#$strawberry->introProtected(); // ERROR. intoProtected() method is protected

?>
