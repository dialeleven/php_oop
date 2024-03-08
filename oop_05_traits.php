<?php
/*
https://www.w3schools.com/php/php_oop_traits.asp

What are Traits?

PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

Traits are declared with the 'trait' keyword:
*/
trait TraitName {
   // some code...
}


// To use a trait in a class, use the 'use' keyword
class MyClass {
   use TraitName;
}



// Let's look at an example ----------------------------/
trait message01 {
   public function msg1() {
      echo 'OOP is fun!';
   }
}

class Welcome01 {
   use message01;
}

$obj = new Welcome01();
$obj->msg1();
/*
Example Explained

Here, we declare one trait: message1. Then, we create a class: Welcome. 
The class uses the trait, and all the methods in the trait will be available in the class.

If other classes need to use the msg1() function, simply use the message1 trait 
in those classes. This reduces code duplication, because there is no need to 
redeclare the same method over and over again.
*/


/*
PHP - Using Multiple Traits
Let's look at another example:
*/
trait message1 {
   public function msg1() {
     echo "OOP is fun! ";
   }
 }
 
 trait message2 {
   public function msg2() {
     echo "OOP reduces code duplication!";
   }
 }
 
 class Welcome {
   use message1;
 }
 
 class Welcome2 {
   use message1, message2;
 }
 
 $obj = new Welcome();
 $obj->msg1();
 echo "<br>";
 
 $obj2 = new Welcome2();
 $obj2->msg1();
 $obj2->msg2();
 /*
 Example Explained
Here, we declare two traits: message1 and message2. 
Then, we create two classes: Welcome and Welcome2. 

The first class (Welcome) uses the message1 trait, and the second class (Welcome2) 
uses both message1 and message2 traits (multiple traits are separated by comma).
 */


// trying something on my own
trait message5 {
   public function msg5() {
      echo 'Trying something out!';
   }

   public function anotherMethod() {
      echo 'Hey another method in the trait';
   }
}

class Welcome5 {
   use message5;
}

$obj = new Welcome5();
$obj->msg5();
$obj->anotherMethod();