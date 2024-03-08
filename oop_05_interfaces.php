<?php
/*
https://www.w3schools.com/php/php_oop_interfaces.asp

PHP - What are Interfaces?
Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. 
When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared with the 'interface' keyword:
*/
interface InterfaceName {
   public function someMethod1();
   public function someMethod2($name, $color);
   public function someMethod3() : string;
}


/*
PHP - Interfaces vs. Abstract Classes

Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

- Interfaces cannot have properties, while abstract classes can
- All interface methods must be public, while abstract class methods is public or protected
- All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
- Classes can implement an interface while inheriting from another class at the same time


PHP - Using Interfaces
To implement an interface, a class must use the 'implements' keyword.

A class that implements an interface must implement all of the interface's methods.
*/
interface Animal {
   public function makeSound();
 }
 
class Cat implements Animal {
   public function makeSound() {
     echo "Meow\n";
   }
}

class Dog implements Animal {
   public function makeSound() {
      echo "Woof woof!\n";
   }
}
 
 $animal = new Cat();
 $animal->makeSound();

 $animal2 = new Dog();
 $animal2->makeSound();
?>