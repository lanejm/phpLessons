<!DOCTYPE html>
<html>
<body>

<?php

//SORT
$names = array("John", "Bob", "Dana", "Sue", "Ted", "Sam", "Xena", "Zara");
rsort($names); //rsort reverses the order.  use sort for normal order.

$nlen = count($names);
for($x = 0; $x <  $nlen; $x++) {
     echo $names[$x];
     echo "<br>";
}

echo "<hr />";

//ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
$tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
krsort($tscore); //ksort sorts by key
//asort sorts in descending order

foreach($tscore as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}

?>

</body>
</html>