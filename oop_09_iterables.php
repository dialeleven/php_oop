<?php
/*
https://www.w3schools.com/php/php_iterables.asp

PHP - What is an Iterable?
--------------------------
An iterable is any value which can be looped through with a foreach() loop.

The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a 
data type for function arguments and function return values.


PHP - Using Iterables
---------------------
The iterable keyword can be used as a data type of a function argument or
as the return type of a function


PHP - Creating Iterables
------------------------
Arrays

All arrays are iterables, so any array can be used as an argument of a 
function that requires an iterable.


Iterators

Any object that implements the Iterator interface can be used as an argument of 
a function that requires an iterable.

An iterator contains a list of items and provides methods to loop through them. 
It keeps a pointer to one of the elements in the list. 
Each item in the list should have a key which can be used to find the item.


An iterator must have these methods:

current() - Returns the element that the pointer is currently pointing to. It can be any data type
key() Returns the key associated with the current element in the list. It can only be an integer, float, boolean or string
next() Moves the pointer to the next element in the list
rewind() Moves the pointer to the first element in the list
valid() If the internal pointer is not pointing to any element (for example, if next() was called at the end of the list), this should return false. It returns true in any other case
*/
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Create an Iterator
// Remember, the 'implements' keyword is used to implement AND use an 'interface.'
// Here we are using the PHP Iterator interface.
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    if (is_array($items))
      // array_values() makes sure that the keys are numbers
      $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}


// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
?>

</body>
</html>