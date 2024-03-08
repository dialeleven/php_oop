<?php
/*
Any code that follows a namespace declaration is operating inside the namespace, 
so classes that belong to the namespace can be instantiated without any qualifiers. 

To access classes from outside a namespace, the class needs to have 
the namespace attached to it.

When many classes from the same namespace are being used at the same time, it is easier to use the namespace keyword.
*/
namespace Html;
include "Html.php";

$table = new Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>