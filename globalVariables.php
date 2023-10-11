<?php

$x = 30;
$y = 20;

function test1() {
    global $x, $y;
    $y = $x + $y;
}

test1();
echo $y;
echo "<hr />";

//static variable

function test2(){
    static $x = 10;
    echo $x;
    $x++;
}

test2();
echo "<br>";
test2();
echo "<br>";
test2();
echo "<br>";
test2();

?>

