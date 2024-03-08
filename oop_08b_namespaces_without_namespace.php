<?php
/*
Any code that follows a namespace declaration is operating inside the namespace, 
so classes that belong to the namespace can be instantiated without any qualifiers. 

To access classes from outside a namespace, the class needs to have 
the namespace attached to it.
*/
include "Html.php";

$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>