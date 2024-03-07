<?php
/*
https://www.w3schools.com/php/php_oop_constants.asp

PHP Class Constants
Class constants can be useful if you need to define some constant data within a class.

A class constant is declared inside a class with the const keyword.

A constant cannot be changed once it is declared.

Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

We can access a constant from outside the class by using the class name followed by 
the scope resolution operator (::) followed by the constant name
*/
class Goodbye {
   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!<br>\n";
   const ANOTHER_CONST = 'Hello World';

   /*
   Or, we can access a constant from inside the class by using the 
   self keyword followed by the scope resolution operator (::) followed 
   by the constant name, like here
   */
   public function byebye() {
      echo self::ANOTHER_CONST;
   }
}

echo Goodbye::LEAVING_MESSAGE;

$goodbye = new Goodbye();
$goodbye->byebye();
?>
