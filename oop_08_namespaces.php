<?php
/*
PHP Namespaces

Namespaces are qualifiers that solve two different problems:

- They allow for better organization by grouping classes that work together to perform a task
- They allow the same name to be used for more than one class

For example, you may have a set of classes which describe an HTML table, such as 
Table, Row and Cell while also having another set of classes to describe furniture, 
such as Table, Chair and Bed. Namespaces can be used to organize the classes into 
two different groups while also preventing the two classes Table and Table from being mixed up.

Namespaces are declared at the beginning of a file using the 'namespace' keyword.
*/
namespace Html;

class Table
{
   public $title = '';
   public $numRows = 0;
   public function message() {
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
   }
}

$table = new Table();
$table->title = 'My table';
$table->numRows = 5;

$table->message();

/*
For further organization, it is possible to have nested namespaces.
Declare a namespace called 'Html' inside a namespace called 'Code.'
*/
namespace Code\Html;
?>